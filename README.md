# วิธีการใช้งาน
---
## คุณสมบัติ
* เข้ารหัสผ่านโดยใช้ Mac Address หรือ Serial Number (ที่ไม่ซ้ำกัน)
    * สามารถระบุ ชื่อลูกค้า, สาขา, ไอพีแอดเดรส, รายละเอียดเพิ่มเติมได้
    * สามารถแทรกอักษรพิเศษให้เพื่อความปลอดภัย (Include Symbols)
    * สามารถกำหนดจำนวนของรหัสผ่านในการเข้ารหัสได้ (Password Length)
    * มีทั้งตัวพิมพ์เล็ก-ใหญ่และตัวเลข (Include Lowercase and Uppercase Characters)
* ถอดรหัสผ่านโดยการนำเอารหัสมาแกะเป็น Mac Address หรือ Serial Number ได้
* สามารถค้นหาข้อมูลในรูปแบบตารางโดยแยกจากลูกค้าได้
* มีการล็อกอินเข้าสู่ระบบเพื่อระบุชื่อผู้ออกรหัสผ่านได้
---
## วิธีการติดตั้ง
### Windows
* ดาวน์โหลด [XAMPP](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.4.33/)

* ดาวน์โหลด [git](https://git-scm.com/downloads)

* ดาวน์โหลดโปรเจ็คแล้วนำไปวางที่ C:\xampp\htdocs ```https://github.com/ezynook/Gen-Password.git```

* เปลี่ยนชื่อโฟลเดอร์ได้ตามที่ต้องการ

### Linux
```sh
git clone https://github.com/ezynook/Gen-Password.git
cd Gen-Password
docker-compose ip -d --build
```
---
