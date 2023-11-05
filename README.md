# Atlas Roślin
Projekt stworzony na potrzeby zajęć Języki programowania dynamicznych stron internetowych oraz Projektowanie bazodanowych aplikacji webowych.


# Wykorzystane zasoby:
Framework PHP Amelia - http://amelia-framework.kudlacik.eu/

Smarty - https://www.smarty.net/

Medoo - https://medoo.in/


# Funkcjonalności
Strona główna
Strona wyświetla rośliny dodane przez wszystkich użytkowników. Menu rozwijane dostosowuje się do roli użytkownika. 


# Rejestracja
Pozwala użytkownikowi utworzyć nowe konto w serwisie. Strona wymaga podania takich informacji jak:

Login
Hasło (Conajmniej 5 znaków, jedna litera, jedna cyfra)
Powtórzone hasło
Wszystkie pola są odpowiednio walidowane metodą validate() obiektu Validator.

Wprowadzenie nieprawidłowej wartości w którekolwiek z pól prowadzi do wyrzucenia błędu (lub błędów, jeśli jest ich więcej). Rejestracja zakończona sukcesem tworzy nowy rekord w bazie oraz przekierowuje użytkownika na stronę logowania.


# Logowanie
Zanim rozpocznie się walidowanie danych z formularza, sprawdzone zostaje, czy user nie posiada już aktywnej sesji. Jeżeli nie, sprawdzane jest czy wprowadzone hasło jest zgodne z tym, co znajduje się w bazie. Jeżeli którakolwiek z wartości jest zła, zostanie zwrócona odpowiednia wiadomość.


# Role
W projekcie wyróżnić można kilka ról, prezentującej się w następującej hierarchi:

Administrator - osoba z uprawnieniami do wszystkiego, bez wyjątku.
Użytkownik - posiada najbardziej podstawowe funkcje, takie jak dodawanie nowych miejsc itp.
