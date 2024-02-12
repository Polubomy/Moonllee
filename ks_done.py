import pandas as pd

try:
    # Загрузка CSV-файла в DataFrame с указанием типа данных
    df = pd.read_csv('ks.csv', sep=';', encoding='utf-8', dtype={'participant_kpp': str})

    # Список ненужных столбцов, которые нужно удалить
    drop_columns = ['price', 'customer_inn', 'customer_kpp', 'name']

    # Удаление ненужных столбцов
    df = df.drop(drop_columns, axis=1)

    # Преобразование publish_date в нужный формат
    df['publish_date'] = pd.to_datetime(df['publish_date']).dt.strftime('%Y-%m-%d')

    # Сохранение изменений в том же файле с использованием кодировки utf-8 и разделителя ;
    df.to_csv('ks1.csv', index=False, encoding='utf-8', sep=';')

except Exception as e:
    print(f"Произошла ошибка: {e}")
