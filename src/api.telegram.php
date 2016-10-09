<?php
/**
 * Telegram Bot Api - PHP Wrapper
 * For an overall description of the botapi visit
 * https://core.telegram.org/bots/api
 *
 * Entry file
 * Require this file if you want to use this wrapper.
 * After that you can use the Bot object.
 * For examples visit
 * https://github.com/Whitebock/TelegramBot-ApiWrapper
 *
 * @package TelegramBot-Api
 * @version 1.2
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */

// Require all class files
$direcory = dirname(__FILE__) . '/';
foreach(glob($direcory . 'class.*.php') as $filename) {
  require_once($filename);
}

/**
  * @param array|object $params Object or array to parse
  * @param string $asClass Class to parse to
  * @return object|bool
  */
function parseClass($params, $asClass = null) {
  
  if(empty($params))
    return false;
    
  if (is_object($params))
    $params = (array)$params;

  // Create class instance.
  if (isset($asClass)) {
    if (!in_array($asClass, get_declared_classes())) {
      return false;
    }

    $class = new $asClass;
  }
  else {
    // Check for a declared class that has all the vars that $params has.
    foreach(get_declared_classes() as $classname) {

      // Check if the class is defined by the user, or by core.
      $reflectionClass = new ReflectionClass($classname);
      if (!$reflectionClass->isUserDefined()) {
        continue;
      }

      // Check if the class has a valid constructor.
      $constructor = $reflectionClass->getConstructor();
      if (!($reflectionClass->isInstantiable()) || $constructor == null) {
        continue;
      }

      // Check if the class constructor requires no params.
      $constructorparams = $constructor->getParameters();
      if (sizeof($constructorparams) !== 0)
        continue;

      // Check if class has all required vars.
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
      
      // End search as soon as a valid class has been found.
      if ($foundClass != null)
        break;
    }

    // No valid class has been found.
    // TODO:
    // Instead of returning when nothing is found,
    // vars should get checked for other potential objects.
    if ($foundClass == null)
      return false;

    // Create new instance of the class.
    $class = new $foundClass;
  }

  // Assign the values to the new class object.
  foreach($params as $name => $value) {

    if (is_object($value)) {
      // If value is an object, parse it.
      $class->$name = parseClass($value);
    }
    /*
    else if(is_array($value)){
      // Check if the value is an array,
      // because that array could also contain objects. 
      foreach($value as $potentialObject){
        if(is_object($potentialObject)){
          $parsed = parseClass($potentialObject);
          if($parsed)
            $potentialObject = $parsed;
        }
        else if(is_array($potentialObject)){
          // Recursiv
        }
      }
      $class->$name = $value;
    }
    */
    else {
      $class->$name = $value;
    }
  }

  return $class;
}

