<?php

class Databaze
{

    private static PDO $spojeni;

    private static array $nastaveni = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    );

    public static function pripoj(string $host, string $uzivatel, string $heslo, string $databaze): PDO
    {
        if (!isset(self::$spojeni)) {
            self::$spojeni = @new PDO(
                "mysql:host=$host;dbname=$databaze",
                $uzivatel,
                $heslo,
                self::$nastaveni
            );
        }
        return self::$spojeni;
    }

    public static function vratZakaznika(int $id): array {
        $sql = "SELECT * FROM zakaznik WHERE zakaznik_id = ?";
        $dotaz = self::$spojeni->prepare($sql);
        $dotaz->execute([intval($id)]);
        return $dotaz->fetch(PDO::FETCH_ASSOC);
    }

    public static function vypisZakazniky(string $action, string $tlacitkoAkce)
    {
        $data = self::$spojeni->query("SELECT * FROM zakaznik");

        foreach ($data as $row) {
            echo('<tr>
            <td>' . $row['prijmeni'] . '</td>
            <td>' . $row['jmeno'] . '</td>
            <td>' . $row['email'] . '</td>
            <td>' . $row['telefon'] . '</td>' .
            "<td><form action='$action' method='post'>" . '<input type="hidden" name="id" value="' . $row['zakaznik_id'] . '"><input class="btn btn-primary btn-user btn-block" type="submit" value="' . $tlacitkoAkce . '"></form></td>

        </tr>');
        }
    }

    public static function seznamZakazniku()
    {
        $data = self::$spojeni->query("SELECT * FROM zakaznik");

        foreach ($data as $row) {
            echo('<tr>
            <td>' . $row['prijmeni'] . '</td>
            <td>' . $row['jmeno'] . '</td>
            <td>' . $row['email'] . '</td>
            <td>' . $row['telefon'] . '</td>
        </tr>');
        }
    }

    public static function editujZakaznika(int $id, string $firstName, string $lastName, string $email, string $phone)
    {
        $pole = [htmlspecialchars($firstName), htmlspecialchars($lastName), htmlspecialchars($email), htmlspecialchars($phone), intval($id)];
        $sql = "UPDATE zakaznik SET jmeno = ?, prijmeni = ?, email = ?, telefon = ? WHERE zakaznik_id = ?";
        $dotaz = self::$spojeni->prepare($sql);
        $dotaz->execute($pole);
        return $dotaz;
    }

    public static function smazZakaznika(int $id)
    {
        $pole = [intval($id)];
        $sql = "DELETE FROM zakaznik WHERE zakaznik_id = ?";
        $dotaz = self::$spojeni->prepare($sql);
        $dotaz->execute($pole);
        return $dotaz;
    }

    public static function pridejZakaznika($firstName, $lastName, $email, $phone)
    {
        $pole = [htmlspecialchars($firstName), htmlspecialchars($lastName), htmlspecialchars($email), htmlspecialchars($phone)];
        $sql = "INSERT INTO zakaznik (jmeno, prijmeni, email, telefon) VALUE (?,?,?,?)";
        $dotaz = self::$spojeni->prepare($sql);
        $dotaz->execute($pole);
        return $dotaz;
    }


}
