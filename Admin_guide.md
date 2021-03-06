## Инструкция по развертыванию сайта на хостинге

### Типичная схема размещения сайтов на серверах Timeweb выглядит следующим образом:

- / - корневая директория аккаунта;
- /public_html - директория для файлов главного сайта;
- /new-site - директория для дополнительного сайта;
- /new-site/public_html - директория для файлов дополнительного сайта (создается автоматически при создании новой директории в корне аккаунта).
Файлы сайта необходимо загружать в папку public_html необходимой директории, сохраняя структуру каталогов с файлами.

Для размещения сайта нужно хостинг и зайти в созданную панель управления аккаунтом, используя логин и пароль, высланные на ваш e-mail после регистрации на сайте. Далее выполняем следующие действия:
- Если у вас уже есть зарегистрированный домен, добавьте его в раздел "Домены и поддомены" по кнопке "Добавить домен", либо зарегистрируйте новый домен в этом же разделе.
- В процессе регистрации или переноса домена создайте директорию сайта, к которой должен быть привязан домен (или выберите существующую). Вы также можете создать директорию в разделе "Сайты" (кнопка "Создать новый сайт"). Имя директории не должно превышать 40 символов.
- Загрузите файлы сайта в папку public_html в директории сайта с помощью подключения по FTP или "Файлового менеджера" ("Файл" - "Загрузить на сервер").
- Если для работы сайта требуется база данных, создайте новую базу в разделе "Базы данных MySQL". Инструкция доступна в статье "Создание базы данных".
- Проверьте работу сайта.

P.S Для того, чтобы сайт работал по защищенному протоколу https (это защищает данные пользователей при передаче, повышает доверие пользователей к вашему сайту и его позиции в поисковых системах), для домена можно заказать SSL-сертификат, например, бесплатный Let's Encrypt. Заказать SSL можно в разделе "SSL-сертификаты".
