def c(n):
    total = sum(i**(1/n) for i in range(1, 2025))
    result = (total / 2024) ** n
    return result

for x in range(100000000,1000000000000000001):
    result = c(x)
    print(f"For n={x}: {result}")
