<?php
# This example demonstrates a function that accepts parameters

function checkNumber($guess, $mysteryNumber)
{
    if ($guess == $mysteryNumber) {
        return 'correct';
    } elseif ($guess > $mysteryNumber) {
        return 'high';
    } else {
        return 'low';
    }
}

// var_dump(checkNumber(3, 6)); # low
// var_dump(checkNumber(7, 3)); # high
var_dump(checkNumber(3, 3)); # correct


#Notes
#  possible ideas for project use !, 
#  have the $mystery number the array of previous selected times
# If the time is available, OUTSIDE this function add it to the array of previous selected times  ... think about this- may be away around this - return in an array - don't think that works
#
# tecnical details
# can only execute single return within a function
#
# SCOPE
# you only have access to the variable within the fx (its a local scope and vice versa - a variable defined outside a fx cannot be accessed w/in a fx) so you use parameters to pass in those variables and returns to export them out. for example
# $feedback = checkNumber(3,3);
#gets the  value out of fx

# example C, save high score, doesn't return a value
# THIS MAY BE kind of how to save performance time to array ...

# Classes (a feature of object oriented programing)
# represent entities, e.g. ecommerce classes might be Catalog, Product, Order
# Class is stucture of code divided into two categories
    #Properties - characterictics/ data of the class, 
    #Methods - things the class can do  
#
    