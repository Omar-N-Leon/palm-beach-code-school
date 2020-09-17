// -------------------------------
// Fuuuuuuunctions!
// -------------------------------

/*

You are going to create several functions.
Give each function a name that makes sense according to what the function will accomplish.

For example :

// Given a room's width and length, return its area:
function area(width, length){
	return width * length;
}

Create the following functions AND invoke them:

1. A function to output your name to the console.
	Expected output in the console: your name (e.g. Jill Smith)

2. A function to greet all humans by outputting to the console: 'Greetings Human!'

3. A function to greet whatever species name is passed into the function.
	Expected output in the console is: 'Greetings [SPECIES]',
	where [SPECIES] is whatever species name was passed into the function.

4. A function which will accept a message and a species name as parameters,
   and log to the console the message as well as the species name.
	Expected output in the console is : '[GREETING], [SPECIES]!',
	where [GREETING] is the greeting that was passed to the function,
	and [SPECIES] is whatever species was passed to the function.
	You might invoke the function like this: greet_species( 'Hi there', 'Martians' )

5. A function which will accept a number as parameter, and log to the console the square of that number.
	Expected output in the console is: number * number
	For example, if you pass in the number 5, the expected output will be 25

// To declare a function:
function display_my_name() {
	console.log( 'Jill Smith' );
}

// To invoke the function:
display_my_name();

*/

// PUT YOUR CODE HERE:
function name() {
	console.log ('Omar Leon');
}
name();

function greet() {
	console.log ('Greetings Human!');
}
greet();

function greetSpecies(species) {
	console.log('Greetings ' + species )
}
greetSpecies("Giraffes");