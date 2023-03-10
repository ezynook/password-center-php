# วิธีการใช้งาน
---
## Pull Project
#### Windows
```sh
เข้าไปที่ C:\XAMPP\htdocs\
git clone https://github.com/ezynook/Gen-Password.git
เปลี่ยนชื่อโฟลเดอร์เป็น genpassword
```
#### Linux and MacOS
```sh
cd /path/xampp/htdocs
git clone https://github.com/ezynook/Gen-Password.git
mv Gen-Password genpassword
```
## สร้าง Database และ Table
```sh
เข้าไปที่ Browser
http://localhost/genpassword/migration.php
```
## การใช้งาน
> เข้ารหัสผ่าน ```http://localhost/genpassword/encode.php?menu=encode```   <br>
> ถอดรหัสรหัสผ่าน ```http://localhost/genpassword/decode.php?menu=decode``` <br>
> ค้นหารหัสผ่าน ```http://localhost/genpassword/table-search.php?menu=table-search```
---
> ### Developed by Pasit Y. 2023