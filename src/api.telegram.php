<?php

/**
 * Telegram Bot Api - PHP Wrapper
 * @version 0.9
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @todo Implement all api functions
 */

  // Require all class files
  $direcory = dirname(__FILE__) . '/';
  foreach(glob($direcory . 'class.*.php') as $filename) {
      require_once ($filename);
  }

  /**
   * @param array|object $params Object or array to parse
   * @param string $asClass Class to parse to
   * @return object|bool
   */
  function parseClass($params, $asClass = null) {
    
      if(empty($params)){
        return false;
      }
    
      if (is_object($params)) {
          $params = (array)$params;
      }

      // Create class instance
      if (isset($asClass)) {
          if (!in_array($asClass, get_declared_classes())) {
              return false;
          }

          $class = new $asClass;
      }
      else {

          // Check for a declared class that has all the vars that $params has
          foreach(get_declared_classes() as $classname) {

              // Check if the class is defined by the user, or by core
              $reflectionClass = new ReflectionClass($classname);
              if (!$reflectionClass->isUserDefined()) {
                  continue;
              }

              // Check if the class has a valid constructor
              $constructor = $reflectionClass->getConstructor();
              if (!($reflectionClass->isInstantiable()) || $constructor == null) {
                  continue;
              }

              // Check if the class constructor requires no params
              $constructorparams = $constructor->getParameters();
              if (sizeof($constructorparams) !== 0) {
                  continue;
              }

              // Check if class has all required vars
              $reflectionProperties = $reflectionClass->getProperties(ReflectionProperty::IS_PUBLIC);
              foreach($reflectionProperties as $reflectionProperty) {
                  $reflectionPropertyNames[] = $reflectionProperty->getName();
              }

              foreach($params as $varname => $value) {
                  if (!in_array($varname, $reflectionPropertyNames)) {
                      $foundClass = null;
                      break;
                  }
                  else {
                      $foundClass = $classname;
                  }
              }

              if ($foundClass != null) {
                  break;
              }
          }

          if ($foundClass == null) {
              return false;
          }

          // Create new instance of the class

          $class = new $foundClass;
      }

      // Assign the values to the new class object
      foreach($params as $name => $value) {

          // If value is an object, parse it
          if (is_object($value)) {
              $class->$name = parseClass($value);
          }
          else {
              $class->$name = $value;
          }
      }

      return $class;
  }

?>