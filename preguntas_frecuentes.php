<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/favicon.ico">
    <title>World</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Fuente de Google para el caso de fallback -->
    <link href="https://fonts.googleapis.com/css2?family=Cy+Grotesk+Grand:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body>

    <!-- Botón Robot para WhatsApp -->
    <?php include 'includes/header.php'; ?>

    <main class="faq-section">
        <h1>Preguntas Frecuentes</h1>
        <div class="accordion">
            <div class="accordion-item">
                <button class="accordion-header">¿Qué es World?</button>
                <div class="accordion-content">
                    <p>World es una red global de personas reales diseñada para construir un sistema de identidad digital y financiero justo, confiable y accesible.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-header">¿Cómo funciona el Orb?</button>
                <div class="accordion-content">
                    <p>El Orb es un dispositivo que verifica que eres una persona real mediante un escaneo único, sin guardar tu información personal.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-header">¿Es seguro usar World ID?</button>
                <div class="accordion-content">
                    <p>World ID utiliza tecnología encriptada para garantizar que tu identidad sea segura y anónima, permitiéndote demostrar que eres único en internet sin exponer tus datos.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-header">¿Cómo se protege mi privacidad?</button>
                <div class="accordion-content">
                    <p>World garantiza la privacidad al no almacenar información personal en el Orb, solo se crea una clave encriptada para tu World ID.</p>
                </div>
            </div>
        </div>
    </main>


    <!-- Script para el menú hamburguesa -->
    <script src="includes/hamburguesa.js"></script>
    
    <!-- Botón Robot para WhatsApp -->
    <?php include 'includes/robot.php'; ?>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
    const accordionHeaders = document.querySelectorAll('.accordion-header');

    accordionHeaders.forEach(header => {
        header.addEventListener('click', () => {
            const content = header.nextElementSibling;

            // Cerrar otros elementos abiertos
            document.querySelectorAll('.accordion-content').forEach(item => {
                if (item !== content) {
                    item.style.display = 'none';
                }
            });

            // Alternar visibilidad
            if (content.style.display === 'block') {
                content.style.display = 'none';
            } else {
                content.style.display = 'block';
            }
        });
    });
});

    </script>

</body>

</html>