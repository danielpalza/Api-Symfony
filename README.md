# Api de Symfony 4
Api hecha en Symfony como ejercicio.

# Instalación
$ git clone https://github.com/danielpalza/Api-Symfony.git

$ composer install

# Ejecucion
$ php -S 127.0.0.1:8000 -t public
  
  Esto ejecutara la Api de manera local en el puerto "8000".
  
# EndPoints
 /random/by-month/{year} -> Devuelve un array con valores entre 1-1000 para cada mes del año ("year") especificado.
 
 /random/by-day/{month} -> Devuelve un array con valores entre 500-800 para cada dia del mes ("month") especificado. 


