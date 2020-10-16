//--------------------------- Functions ---------------------------

// Addition operation
function myAdd (a, b) {
  return (a + b)
} console.log(myAdd(4, 6))


// Subtraction operation
function mySub (a, b) {
  return (a - b)
} console.log(mySub(3, 2))


// Multiplication operation
function myMult (a, b) {
  return (a * b)
} console.log(myMult(2, 3))


// Division operation
function myDiv (a, b) {
  if (b !== 0) {
    return (a / b)
  } else {
    console.log('Error! Division by zero!')
  }
} console.log(myDiv(10, 5))


// Calculates the power of a number
function myPow (a, step) {
  let res = 1
  for (let i = 0; i < step; i++) {
    res = res * a
  }
  return (res)
} console.log(myPow(2, 3))


// Calculates the square root a number
function mySqrt (a) {
  return (Math.sqrt(a))
} console.log(mySqrt(25))


// Calculates the Factorial of a number
function myFact (a) {
  let res = 1
  for (let i = 1; i <= a; i++) {
    res = res * i
  }
  return (res)
} console.log(myFact(5))


// Sinus (in degrees)
function mySin (a) {
  return (Math.sin(a * Math.PI / 180))
} console.log(mySin(90))


// Cosinus (in degrees)
function myCos (a) {
  return (Math.cos(a * Math.PI / 180))
} console.log(myCos(60))

//-------------------------- Working with an array --------------------------

let arr = []
let size = 30
let temp = 0

// Random number generation
function myRandom () {
  return (Math.round(Math.random() * 100))
}

// Filling in an array with random numbers
document.write('<p>Non-sorted array:</p>')
for (let i = 0; i < size; i++) {
  arr[i] = myRandom ()
  document.write(arr[i], ' ')
}

// BubbleSort :)
for (let i = 0; i < size - 1; i++) {
  for (let j = 0; j < size - i - 1; j++) {
   if (arr[j] > arr[j + 1]) {
     temp = arr[j]
     arr[j] = arr[j + 1]
     arr[j + 1] = temp
   }
  }
}

// Output sorted array
document.write('<p>Sorted array:</p>')
for (let i = 0; i < size; i++) {
  document.write(arr[i], ' ')
}