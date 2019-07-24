1. Wyślij wyłącznie folder engine do głównego katalogu strony (public_html)
2. W PA przejdź do sekscji zarządzania wtyczkami
3. Kliknij przycisk "Prześlij wtyczkę" po czym prześlij plik "pozdrowienia.xml"

4. Otwórz main.tpl (lub inny plik szablonu)
 - W wybranym miejscu gdzie mają być wyświetlane pozdrowienia dodaj:
<div class="pozdrowienia">{pozdro}</div>

		
 - W wybranym miejscu dodaj przycisk:
<a href="/index.php?do=pozdro" title="Wyślij pozdrowienia"></a>

UWAGA!!!!
Aby zarządzać modułem Pozdrowień konieczne jest ustawienie dla danej grupy uprawnienia do modyfikacji tej wtyczki w tym celu przejdź do:
PA --> Ustawienia grup Użytkowników --> Wybieramy grupę --> przechodzimy do sekcji Adminpanel --> na samym dole mamy opcję do możliwości edycji modułu pozdrowień
