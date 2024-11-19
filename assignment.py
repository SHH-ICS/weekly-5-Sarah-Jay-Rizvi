def calculate_pi(iterations):
    pi_approx = 0
    for n in range(iterations):
        pi_approx += ((-1) ** n) / (2 * n + 1)
    pi_approx *= 4
    return pi_approx

# Get the number of iterations from the user
try:
    iterations = int(input("Enter the number of iterations: "))
    if iterations <= 0:
        print("Please enter a positive number.")
    else:
        pi_value = calculate_pi(iterations)
        print(f"Approximation of PI after {iterations} iterations: {pi_value}")
except ValueError:
    print("Please enter a valid integer.")
