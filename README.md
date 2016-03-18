#Реализовано:
###- Migations
###- Sedders
###-Custom artisan commands
####---news-comm:create  Create a new comment
####---news-comm:remove  Remove comment by ID
####---news:get Return all news
###-Model Comment
####---createComment() 
#Не реализован счетчик комментариев.
####Изначально хотел использовать Events, но не успел с ними разобраться. Так же была идея использовать статическое свойство модели News, в конструкторе его инициализировать выборкой из БД кол-ва комментариев. В моделе Comment добавить два метода, которые б дергали в зависимости от события (add/rm) счетчик комментариев в моделе News.

#Спасибо за тестовое задание.
