## Instanacion de MySQL

Se confifura el repositorio de Mysql

con sudo

    rpm -Uvh https://repo.mysql.com/mysql80-community-release-el7-3.noarch.rpm

se habilita el archive 

    sed -i 's/enabled=1/enabled=0/' /etc/yum.repos.d/mysql-community.repo

Se habilita e instala la version 8 de Mysql

    yum --enablerepo=mysql80-community install -y mysql-community-server

    systemctl start mysqld
    
verificar su ejecución

    sudo systemctl status mysqld
    
Green Ok 

Generar contraseña temporal

    sudo grep "A temporary password" /var/log/mysqld.log
    
Asegurar la Instalación
    
    sudo mysql_secure_installation
    
    Enter password for user root: 
    
    The existing password for the user account root has expired. Please set a new password.
    
    New password: 
    
    Re-enter new password: 
    The 'validate_password' component is installed on the server.
    The subsequent steps will run with the existing configuration
    of the component.
    Using existing password for root.
    
    Estimated strength of the password: 100 
    Change the password for root ? ((Press y|Y for Yes, any other key for No) : n
    
    
    Remove anonymous users? (Press y|Y for Yes, any other key for No) : y
    Success.
    
    
    Normally, root should only be allowed to connect from
    'localhost'. This ensures that someone cannot guess at
    the root password from the network.
    
    Disallow root login remotely? (Press y|Y for Yes, any other key for No) : n
    
     ... skipping.
    By default, MySQL comes with a database named 'test' that
    anyone can access. This is also intended only for testing,
    and should be removed before moving into a production
    environment.
    
    
    Remove test database and access to it? (Press y|Y for Yes, any other key for No) : y
     - Dropping test database...
    Success.
    
     - Removing privileges on test database...
    Success.
    
    Reloading the privilege tables will ensure that all changes
    made so far will take effect immediately.
    
    Reload privilege tables now? (Press y|Y for Yes, any other key for No) : y
    Success.
    
    All done! 

