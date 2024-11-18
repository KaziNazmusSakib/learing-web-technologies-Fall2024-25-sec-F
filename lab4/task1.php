<?php
     
    $nameError = "";
    $nameSuccess = "";
    $name = "";

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $name = trim($_POST['name']);

         
        if (empty($name)) {
            $nameError = "Name cannot be empty.";
        } elseif (str_word_count($name) < 2) {
            $nameError = "Name must contain at least two words.";
        } elseif (!ctype_alpha($name[0])) {  // Check if first character is a letter
            $nameError = "Name must start with a letter.";
        } elseif (!filter_var($name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z][a-zA-Z.-]*$/")))) {
            $nameError = "Name can only contain letters, periods, and dashes.";
        } else {
            
            $nameSuccess = "Success! Your name is: " . htmlspecialchars($name);
        }
    }
?>

 
<?php if ($nameSuccess): ?>
    <div class="success">
        <p><?php echo $nameSuccess; ?></p>
    </div>
<?php endif; ?>
 
<?php if ($nameError): ?>
    <div class="error">
        <p><?php echo $nameError; ?></p>
    </div>
<?php endif; ?>
