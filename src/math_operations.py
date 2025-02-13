import sys


def to_numeric(value, name):
    try:
        return int(value)
    except ValueError:
        print(f"Error: {name} is not numeric value.")
        exit(1)


number1 = to_numeric(sys.argv[1], "Number1")
number2 = to_numeric(sys.argv[2], "Number2")
operation = sys.argv[3]


def math_operate(number1: int, number2: int, operation: str):
    if operation == "Addition":
        return number1 + number2
    elif operation == "Subtraction":
        return number1 - number2
    elif operation == "Multiplication":
        return number1 * number2
    elif operation == "Division":
        if number2 == 0:
            print("Error: Number2 is must not be zero.")
            exit(1)
        else:
            return number1 / number2
    else:
        print("Error: You selected the unexpected operation.")
        print(f"Operation: {operation}")
        exit(1)


def calc_additional(result: float):
    if result > 100:
        return result * 2
    elif result < 0:
        return result + 50
    else:
        return result


result = math_operate(number1, number2, operation)
result = calc_additional(result)
print(result)
