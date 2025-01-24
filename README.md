# byte5 Live Assessment: CandyBar API


## 📌 Projektübersicht
Für unser Office benötigen wir eine API zur Verwaltung unserer beliebten **CandyBar**

Deine Aufgabe ist es, das vorbereitete Projekt fertigzustellen und einen Controller für die CandyBar API zu entwickeln. 

Dafür soll die Method des [Test-Driven-Developments](https://martinfowler.com/bliki/TestDrivenDevelopment.html) genutzt werden.

---

## 🎯 Aufgabenstellung
### **Ziel:**  
1. Schreibe **Feature-Tests**, um die Funktionalität der API-Endpunkte zu testen.  
2. Erstelle nach und nach die benötigten Funktionen der API
3. Alle Tests sollen mit PEST geschrieben werden

---

## 🛠️ Setup  
0. **Vorbereitung**
    ```
   Docker muss installiert sein
   ```
1. **Projekt installieren**  
   ```bash
   composer install
   cp .env.example .env
   ./vendor/bin/sail up -d
   ./vendor/bin/sail artisan key:generate
   ```

2. **Datenbank einrichten**
   ```bash
   ./vendor/bin/sail artisan migrate
   ./vendor/bin/sail artisan db:seed
   ```

3. **Tests ausführen**
   ```bash
   ./vendor/bin/sail artisan test
   ```


## 📚 Ressourcen
### **Laravel-Dokumentation**
- [HTTP-Tests](https://laravel.com/docs/http-tests)
- [Validation](https://laravel.com/docs/validation)
- [Testing](https://laravel.com/docs/testing)
- [Hands-On-Beispiel Video](https://www.youtube.com/watch?v=UHnP7ThzLpE&ab_channel=LaravelDaily)

### **Hilfreiche Konzepte**
- API Controller
- Testing mit PEST

---

## ⏱️ Vorbereitung
- Stelle sicher, dass du mit **Laravel-Testing-Grundlagen** vertraut bist.
- Überlege, welche Testfälle für CRUD-APIs relevant sind (z. B. fehlerhafte Eingaben).
- Zum eigenen Testen & Vorbereiten gibt es auch eine Postman Collection (live-assessment-byte5.postman_collection.json)

**Viel Erfolg!** 🚀  
Bei technischen Fragen: ykupferschmidt@byte5.de
