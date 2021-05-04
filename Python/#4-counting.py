from keyboard import write, send
from time import sleep


def delay_calculate(number):
    return 1.1 / len(str(number))


def integer_validation(message, failure_message):
    while True:
        try:
            return int(input(message))

        except ValueError:
            input(failure_message)


def boolean_validation(message, failure_message):
    while True:
        user_input = input(message)
        if user_input.lower() not in ('y', 'n'):
            input(failure_message)
            continue
        if user_input.lower() == 'y':
            return True
        return False


def show_countdown():
    print("Starting in:")
    for i in range(5, 0, -1):
        print(i)
        sleep(1)


def main():
    write(' ')
    number = integer_validation("Pick your starting number: ",
                                "Invalid input, write a number like 1 or 5")
    iterations = integer_validation(
        "Pick how many numbers you want to write: ",
        "Invalid input, write a number like 1 or 5")
    show_countdown()
    delay = delay_calculate(number)
    active = True
    while active:
        for number in range(number, number + iterations):
            if len(str(number)) != delay:
                delay = delay_calculate(number)
            write(f"{number}", delay=delay)
            send('enter')
            number += 1
        user_input = boolean_validation(
            f"Do you want to print another {iterations} numbers [Y]es [N]o: ",
            "Invalid input, write one of the letters 'y' or 'n'")
        if user_input:
            show_countdown()
            continue
        break


main()