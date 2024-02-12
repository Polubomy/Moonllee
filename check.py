import logging
from datetime import datetime
def timing_decorator(func):
    def wrapper(*args, **kwargs):
        start_time = datetime.now()
        result = func(*args, **kwargs)
        end_time = datetime.now()
        execution_time = end_time - start_time
        logging.info(f"Время выполнения функции {func.__name__}: {execution_time}")
        return result
    return wrapper
@timing_decorator
def factorial(n):
    if n < 0:
        raise ValueError("Input must be a non-negative integer.")
    if not isinstance(n, int):
        raise TypeError("Input must be an integer")
    if n <= 1:
        return 1
    else:
        return n * factorial(n-1)
number = 10000
result = factorial(number)
print(f"Факториал числа {number} равен {result}")
