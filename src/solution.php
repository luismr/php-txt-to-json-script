<?php

/**
 * Converts input values into a JSON string without spaces
 * 
 * @param mixed $Calories Value between 0 and 10000
 * @param mixed $Proteins Value between 0 and 10000
 * @param mixed $Fats Value between 0 and 10000
 * @param mixed $Carbohydrates Value between 0 and 10000
 * @return string JSON string without spaces
 * @throws InvalidArgumentException if any value is invalid or out of range
 */
function Solve($Calories, $Proteins, $Fats, $Carbohydrates) {
    // Function to validate a single value
    $validateValue = function($value, $name) {
        // Check if value can be converted to integer
        if (!is_numeric($value)) {
            throw new InvalidArgumentException("$name must be a numeric value");
        }
        
        $intValue = (int)$value;
        
        // Check range constraints
        if ($intValue < 0 || $intValue > 10000) {
            throw new InvalidArgumentException("$name must be between 0 and 10000");
        }
        
        return $intValue;
    };

    // Validate and convert all inputs
    try {
        $data = [
            'Calories' => $validateValue($Calories, 'Calories'),
            'Proteins' => $validateValue($Proteins, 'Proteins'),
            'Fats' => $validateValue($Fats, 'Fats'),
            'Carbohydrates' => $validateValue($Carbohydrates, 'Carbohydrates')
        ];
        
        // Convert to JSON string without any whitespace
        return json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    } catch (InvalidArgumentException $e) {
        // Re-throw the exception
        throw $e;
    } catch (Exception $e) {
        // Handle any unexpected errors during JSON encoding
        throw new Exception("Error creating JSON output: " . $e->getMessage());
    }
}

// Example usage:
// try {
//     $result = Solve(100, 30, 40, 30);
//     echo $result; // Outputs: {"Calories":100,"Proteins":30,"Fats":40,"Carbohydrates":30}
// } catch (Exception $e) {
//     echo "Error: " . $e->getMessage();
// } 