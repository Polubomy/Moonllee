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
    fact = 1
    if n == 0 or n == 1:
        return 1
    else:
        while n != 0:
            fact *= n
            n -= 1
        return fact
number = 10000
result = factorial(number)
print(f"Факториал числа {number} равен {result}")
