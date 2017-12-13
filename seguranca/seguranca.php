<?php



$email = filter_var('\n\tjo-ao@4linux.gobbr\n\n', FILTER_SANITIZE_EMAIL);

var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));