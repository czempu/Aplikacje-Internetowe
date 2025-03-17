
           // Tworzymy instancje offcanvas
           var offcanvasLeft = new bootstrap.Offcanvas(document.getElementById('offcanvasLeft'), {
            backdrop: false // Wyłącza tło (zapobiega zamknięciu po kliknięciu)
        });
    
        var offcanvasRight = new bootstrap.Offcanvas(document.getElementById('offcanvasRight'), {
            backdrop: false // Wyłącza tło (zapobiega zamknięciu po kliknięciu)
        });
    
        // Przycisk otwierający lewy panel
        document.getElementById('openLeft').addEventListener('click', function () {
            offcanvasLeft.toggle(); // Zmienia stan lewego panelu (otwiera lub zamyka)
        });
    
        // Przycisk otwierający prawy panel
        document.getElementById('openRight').addEventListener('click', function () {
            offcanvasRight.toggle(); // Zmienia stan prawego panelu (otwiera lub zamyka)
        });
        // Obsługa Enter w polu tekstowym
        userInputChat.addEventListener("keypress", (e) => {
          if (e.key === "Enter") {
            sendMessage.click();
          }
        });
    
    
    