build - итоговая папка всего вашего проекта.

src - папка , в которой вы работаете.

| components - в сборке присутствует компонентная сборка(импорт html из components в index.html).
*Чтоб импортировать html из components, следует в index.html в нужной вам области (куда вы хотите вставить компонент) написать - @@include('components/имя вашего компонента').

| _header.html - header вашего проекта .
| _head.html - head вашего проекта.
| _footer.html - footer вашего проекта.
| _scripts.html - скрипты вашего проекта.
| fonts - папка с шрифтами вашего проекта ( которые автоматически конвертирются в ttf,woff,woff2).
| images - папка с картинками вашего проекта ( которые автоматически сжимаются *png , svg) .

| js - папка с вашими файлами JavaScript .

| scss - папка с вашими файлами SCSS .

| _fonts.scss - подключаем шрифты ( из папки ../fonts ) .
| _global.scss - глобальные стили для вашего проекта .
| _media.scss - файл с медиа-запросами.
| _vars.scss - файл с переменными .
| style.scss - ваш основной файл со стилями .
Footer
© 2023 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Statu