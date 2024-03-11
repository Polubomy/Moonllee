class Example:
    def __init__(self, numbers):
        self.numbers = numbers

    def integral(self):
        if not self.numbers:
            return 0
        else:
            return sum(self.numbers)


numbers_list = [1, 2, 3, 4, 5]

example_instance = Example(numbers_list)

result_integral = example_instance.integral()
print(f"Интеграл чисел: {result_integral}")
