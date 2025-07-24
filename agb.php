<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGB - MeinSite</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <?php include 'includes/navbar.php'; ?>
    
    <!-- Main Content -->
    <main class="py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h1 class="text-3xl font-bold text-gray-900 mb-8">
                    Allgemeine Geschäftsbedingungen
                </h1>
                
                <div class="prose max-w-none">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">§ 1 Geltungsbereich</h2>
                    <p class="text-gray-600 mb-6">
                        Diese Allgemeinen Geschäftsbedingungen gelten für alle Verträge zwischen MeinSite 
                        und dem Kunden über die Lieferung von Waren oder die Erbringung von Dienstleistungen.
                    </p>
                    
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">§ 2 Vertragsschluss</h2>
                    <p class="text-gray-600 mb-6">
                        Der Vertrag kommt durch die Annahme der Bestellung durch MeinSite zustande. 
                        Dies erfolgt durch eine Auftragsbestätigung oder durch die Lieferung der Ware.
                    </p>
                    
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">§ 3 Preise und Zahlungsbedingungen</h2>
                    <p class="text-gray-600 mb-6">
                        Die angegebenen Preise verstehen sich inklusive der gesetzlichen Mehrwertsteuer. 
                        Die Zahlung erfolgt wahlweise per Vorkasse, Kreditkarte oder PayPal.
                    </p>
                    
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">§ 4 Lieferung</h2>
                    <p class="text-gray-600 mb-6">
                        Die Lieferung erfolgt an die vom Kunden angegebene Adresse. Die Lieferzeit 
                        beträgt in der Regel 3-5 Werktage nach Zahlungseingang.
                    </p>
                    
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">§ 5 Widerrufsrecht</h2>
                    <p class="text-gray-600 mb-6">
                        Verbrauchern steht ein 14-tägiges Widerrufsrecht zu. Die Widerrufsfrist beginnt 
                        mit dem Tag, an dem der Kunde oder ein von ihm benannter Dritter die Waren erhalten hat.
                    </p>
                    
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">§ 6 Gewährleistung</h2>
                    <p class="text-gray-600 mb-6">
                        Es gelten die gesetzlichen Gewährleistungsbestimmungen. Bei Sachmängeln hat 
                        der Kunde zunächst Anspruch auf Nacherfüllung.
                    </p>
                    
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">§ 7 Schlussbestimmungen</h2>
                    <p class="text-gray-600 mb-6">
                        Es gilt deutsches Recht. Sollten einzelne Bestimmungen unwirksam sein, 
                        bleibt die Wirksamkeit der übrigen Bestimmungen unberührt.
                    </p>
                    
                    <div class="bg-gray-100 p-4 rounded-lg mt-8">
                        <p class="text-sm text-gray-600">
                            <strong>Stand:</strong> <?php echo date('d.m.Y'); ?><br>
                            Diese AGB können jederzeit ohne vorherige Ankündigung geändert werden.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
    
    <!-- Custom JavaScript -->
    <script src="css/script.js"></script>
</body>
</html>
