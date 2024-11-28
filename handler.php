<?php
// Function to calculate the approximation of pi
function calculatePi($iterations)
{
  $piApprox = 0;
  for ($n = 0; $n < $iterations; $n++) {
    $piApprox += pow(-1, $n) / (2 * $n + 1); // Add the nth term to piApprox
  }
  $piApprox *= 4; // Multiply by 4 to get the final approximation
  return $piApprox;
}

// Check if a number is submitted via GET or POST
if (isset($_GET['iterations'])) {
  $iterations = intval($_GET['iterations']); // Get the number of iterations from user input
  if ($iterations > 0) {
    $piValue = calculatePi($iterations);
    echo "Approximation of PI after " . $iterations . " iterations: " . $piValue;
  } else {
    echo "Please enter a positive number of iterations.";
  }
} else {
  echo "Please enter the number of iterations in the query string, e.g., ?iterations=5";
}
