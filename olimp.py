import matplotlib.pyplot as plt
import numpy as np

# Координаты вершин квадрата
A = np.array([0, 0])
B = np.array([0, 5])
C = np.array([5, 5])
D = np.array([5, 0])

# Длина отрезка DB (расстояние от точки D до центра окружности)
DB_length = 2

# Угол между отрезком DB и горизонтальной осью
angle_DB = np.linspace(0, np.pi, 100)

# Координаты точек на кривой DF
DF_x = DB_length * np.cos(angle_DB) + D[0]
DF_y = DB_length * np.sin(angle_DB) + D[1]

# Построение квадрата
plt.plot([A[0], B[0], C[0], D[0], A[0]], [A[1], B[1], C[1], D[1], A[1]], 'b-')

# Построение отрезка DB (окружности)
plt.plot(DB_length * np.cos(angle_DB) + D[0], DB_length * np.sin(angle_DB) + D[1], 'g--')

# Построение кривой DF
plt.plot(DF_x, DF_y, 'r-')

# Установка меток для точек D, A, C, B
plt.text(D[0], D[1], 'D', fontsize=12, ha='right')
plt.text(A[0], A[1], 'A', fontsize=12, ha='right')
plt.text(C[0], C[1], 'C', fontsize=12, ha='left')
plt.text(B[0], B[1], 'B', fontsize=12, ha='left')

# Установка метки для точки F (последняя точка на кривой DF)
plt.text(DF_x[-1], DF_y[-1], 'F', fontsize=12, ha='left')

# Установка осей координат
plt.axhline(0, color='black', linewidth=0.5)
plt.axvline(0, color='black', linewidth=0.5)

# Настройка отображения графика
plt.axis('equal')
plt.grid(color='gray', linestyle='--', linewidth=0.5)
plt.title('Visualization of Pencil Movement')

# Отображение графика
plt.show()
