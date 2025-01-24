# byte5 Live Assessment: Task-API: Test-Driven Bugfixing Challenge


## 📌 Projektübersicht
Dieses Laravel-Projekt ist eine einfache Task-API mit CRUD-Funktionen.  
Deine Aufgabe ist es, **Tests zu schreiben**, um vorhandene Fehler zu identifizieren und diese anschließend zu beheben.

---

## 🎯 Aufgabenstellung
### **Ziel:**  
1. Schreibe **Feature-Tests**, um die Funktionalität der API-Endpunkte zu überprüfen.  
2. Behebe die durch Tests aufgedecketen Fehler.  

### **Hinweis:**  
- Die API enthält **gezielte Bugs** in Validierung, Statuscodes und Fehlerbehandlung.  
- Nutze Tests, um die Probleme Schritt für Schritt aufzudecken.  

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
   sail up -d
   sail artisan key:generate
   ```

2. **Datenbank einrichten**
   ```bash
   sail artisan migrate
   sail artisan db:seed
   ```

3. **Tests ausführen**
   ```bash
   sail artisan test
   ```


## 📚 Ressourcen
### **Laravel-Dokumentation**
- [HTTP-Tests](https://laravel.com/docs/http-tests)
- [Validation](https://laravel.com/docs/validation)
- [Testing](https://laravel.com/docs/testing)

### **Hilfreiche Konzepte**
- HTTP-Statuscodes (200er/400er-Bereiche)
- Laravel Route Model Binding
- Mass Assignment Protection

---

## 📋 Beispiel-Request (POST /api/tasks)
```json
{
    "title": "Testaufgabe",
    "due_date": "2024-12-31"
}
```

---

## ⏱️ Vorbereitung
- Stelle sicher, dass du mit **Laravel-Testing-Grundlagen** vertraut bist.
- Überlege, welche Testfälle für CRUD-APIs relevant sind (z. B. fehlerhafte Eingaben).
- Zum eigenen Testen gibt es auch eine Postman Collection (live-assessment-byte5.postman_collection.json)

**Viel Erfolg!** 🚀  
Bei technischen Fragen: ykupferschmidt@byte5.de
