<?php

use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    // LANDING //
          DB::table('content')->insert([
            'page' => 'landing',
            'section' => 'banner',
            'field' => 'TitleSlider1',
            'type' => 'txt',
            'value' => 'Nutrición para una vida en amor',
          ]);
          DB::table('content')->insert([
            'page' => 'landing',
            'section' => 'banner',
            'field' => 'LeyendSlider1',
            'type' => 'txt',
            'value' => 'Estamos comprometidos para brindarle salud y bienestar a nuestras mascotas a través de alimentos de calidad, elaborados con la experiencia de 45 años en nutrición animal y con todo el amor que se merecen.',
          ]);
          DB::table('content')->insert([
            'page' => 'landing',
            'section' => 'banner',
            'field' => 'TitleSlider2',
            'type' => 'txt',
            'value' => 'Alimentos seguros de alta calidad',
          ]);
          DB::table('content')->insert([
            'page' => 'landing',
            'section' => 'banner',
            'field' => 'LeyendSlider2',
            'type' => 'txt',
            'value' => 'En VIMIFOS® contamos con un Sistema de Gestión Integral conforme a estrictos estándares de calidad y normas internacionales, que soportan a la línea Pet Care gracias a la Certificación en Seguridad Alimentaria FSSC 22000 en planta El Salto (Food Safety System Certification), la cual nos dirige a trabajar con un nuevo enfoque en la gestión de riesgos de inocuidad alimentaria en toda la cadena de suministro.',
          ]);
          DB::table('content')->insert([
            'page' => 'landing',
            'section' => 'banner',
            'field' => 'TitleSlider3',
            'type' => 'txt',
            'value' => 'Confianza y versatilidad',
          ]);
          DB::table('content')->insert([
            'page' => 'landing',
            'section' => 'banner',
            'field' => 'LeyendSlider3',
            'type' => 'txt',
            'value' => 'Trabajamos día a día para atender las necesidades de nuestros clientes, buscando siempre brindar la mejor experiencia a través del desarrollo de nuevas tecnologías que nos lleven a mantener felices a nuestro motor principal: los animales de compañía.',
          ]);
          DB::table('content')->insert([
            'page' => 'landing',
            'section' => 'ProdsSmarts',
            'field' => 'content',
            'type' => 'txt',
            'value' => '<strong>Smart Bites®</strong> es el alimento ideal para asegurar el bienestar y la salud que tu mascota necesita. Contiene
            <strong>NeuroACTIVE®</strong> con ingredientes especiales que le benefician específicamente para cada etapa de su vida.<br>
            Nutrirlo con <strong>Smart Bites®</strong>, es nutrirlo con <strong>Smart Love®</strong>.',
          ]);
          DB::table('content')->insert([
            'page' => 'landing',
            'section' => 'ProdsTital',
            'field' => 'content',
            'type' => 'txt',
            'value' => '<strong>Titán®</strong> es <strong>salud al mejor precio.</strong><br>
              Formulado con los mejores nutrientes para mantener a tu mascota sana de adentro hacia afuera.',
          ]);
          DB::table('content')->insert([
            'page' => 'landing',
            'section' => 'ProdsRock',
            'field' => 'content',
            'type' => 'txt',
            'value' => '<strong>Rocko Plus®</strong> es el alimento que brinda una nutrición completa y balanceada para perros adultos.<br>
            Calidad Plus al mejor precio para ver a tu can <strong>¡Radiante y Feliz!®</strong>',
          ]);
    // SMART BITES PERRO
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'banner',
            'field' => 'leyend1',
            'type' => 'txt',
            'value' => '<strong>Smart Bites®</strong> es el alimento ideal para asegurar el bienestar y la salud que tu mascota necesita. Contiene NeuroACTIVE®, un conjunto de ingredientes cuidadosamente seleccionados para desarrollar y preservar la actividad cerebral de tu amigo durante toda su vida.',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'banner',
            'field' => 'leyend2',
            'type' => 'txt',
            'value' => 'Nutrirlo con <strong>Smart Bites®</strong> es nutrirlo con <strong>Smart Love®</strong>.',
          ]);
          // EDADES
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'cachorro',
            'field' => 'edad',
            'type' => 'txt',
            'value' => 'Hasta 18 meses',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'cachorro',
            'field' => 'presentaciones',
            'type' => 'txt',
            'value' => '2, 4, 10 y 20 kg',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'razapequeña',
            'field' => 'edad',
            'type' => 'txt',
            'value' => '12 meses en adelante',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'razapequeña',
            'field' => 'presentaciones',
            'type' => 'txt',
            'value' => '4 y 20 kg',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'adulto',
            'field' => 'edad',
            'type' => 'txt',
            'value' => '18 meses a 7 años',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'adulto',
            'field' => 'presentaciones',
            'type' => 'txt',
            'value' => '2, 4, 15 y 25 kg',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'senior',
            'field' => 'edad',
            'type' => 'txt',
            'value' => '7 años en adelante',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'senior',
            'field' => 'presentaciones',
            'type' => 'txt',
            'value' => '4 y 7 kg',
          ]);
          // BENEFICIOS
            // CACHORRO
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'cachorrotopizqtitulo',
            'type' => 'txt',
            'value' => 'SISTEMA INMUNE FUERTE',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'cachorrotopizq',
            'type' => 'txt',
            'value' => 'Balance de vitaminas y minerales que elevan sus defensas.',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'cachorrotopdertitulo',
            'type' => 'txt',
            'value' => 'CORAZÓN SANO',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'cachorrotopder',
            'type' => 'txt',
            'value' => 'La vitamina E natural protege las células del corazón.',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'cachorrobottomizqtitulo',
            'type' => 'txt',
            'value' => 'DESARROLLO SALUDABLE',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'cachorrobottomizq',
            'type' => 'txt',
            'value' => 'Con nutrientes ideales para el sano crecimiento de huesos y dientes.',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'cachorrobottomdertitulo',
            'type' => 'txt',
            'value' => 'SISTEMA DIGESTIVO MÁS SANO',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'cachorrobottomder',
            'type' => 'txt',
            'value' => 'Los prebióticos fomentan su digestión equilibrada.',
          ]);
            // RAZAS PEQUEÑAS
            DB::table('content')->insert([
              'page' => 'smartbitesperro',
              'section' => 'beneficios',
              'field' => 'pequeñostopizqtitulo',
              'type' => 'txt',
              'value' => 'SISTEMA INMUNE FUERTE.',
            ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'pequeñostopizq',
            'type' => 'txt',
            'value' => 'Balance de vitaminas y minerales que elevan sus defensas.',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'pequeñostopdertitulo',
            'type' => 'txt',
            'value' => 'CORAZÓN SANO',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'pequeñostopder',
            'type' => 'txt',
            'value' => 'La vitamina E natural protege las células del corazón.',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'pequeñosbottomizqtitulo',
            'type' => 'txt',
            'value' => 'METABOLISMO BALANCEADO',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'pequeñosbottomizq',
            'type' => 'txt',
            'value' => 'El equilibrio de nutrientes le proporciona la energía óptima.',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'pequeñosbottomdertitulo',
            'type' => 'txt',
            'value' => 'SISTEMA DIGESTIVO MÁS SANO',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'pequeñosbottomder',
            'type' => 'txt',
            'value' => 'Los prebióticos fomentan su digestión equilibrada.',
          ]);
            // ADULTO
            DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'adultotopizqtitulo',
            'type' => 'txt',
            'value' => 'SALUD SANO INTEGRAL',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'adultotopizq',
            'type' => 'txt',
            'value' => 'Balance de vitaminas y minerales que elevan sus defensas para un organismo sano.',
          ]);
          DB::table('content')->insert([
          'page' => 'smartbitesperro',
          'section' => 'beneficios',
          'field' => 'adultotopdertitulo',
          'type' => 'txt',
          'value' => 'CORAZÓN SALUD SANO',
        ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'adultotopder',
            'type' => 'txt',
            'value' => 'Litamincorazón.',
          ]);
          DB::table('content')->insert([
          'page' => 'smartbitesperro',
          'section' => 'beneficios',
          'field' => 'adultobottomizqtitulo',
          'type' => 'txt',
          'value' => 'PELAJE BRILLANTE',
        ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'adultobottomizq',
            'type' => 'txt',
            'value' => 'Elomegaillante.',
          ]);
          DB::table('content')->insert([
          'page' => 'smartbitesperro',
          'section' => 'beneficios',
          'field' => 'adultobottomdertitulo',
          'type' => 'txt',
          'value' => 'SISTEMA DIGESTIVO MÁS SANO',
        ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'adultobottomder',
            'type' => 'txt',
            'value' => 'Los prebióticos fomentan su digestión equilibrada.',
          ]);
            // SENIOR
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'seniortopizqtitulo',
            'type' => 'txt',
            'value' => 'ARTICULACIONES FUERTES Y FLEXIBLES',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'seniortopizq',
            'type' => 'txt',
            'value' => 'Con glucosamina que mejora su movilidad.',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'seniortopdertitulo',
            'type' => 'txt',
            'value' => 'CÉLULAS PROTEGIDAS',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'seniortopder',
            'type' => 'txt',
            'value' => 'La vitamina E natural protege sus células del envejecimiento.',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'seniorbottomizqtitulo',
            'type' => 'txt',
            'value' => 'SISTEMA INMUNE SALUDABLE',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'seniorbottomizq',
            'type' => 'txt',
            'value' => 'Balance de vitaminas y minerales que elevan sus defensas.',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'seniorbottomdertitulo',
            'type' => 'txt',
            'value' => 'APARATO DIGESTIVO MÁS SANO',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'seniorbottomder',
            'type' => 'txt',
            'value' => 'Los prebióticos fomentan su digestión equilibrada.',
          ]);
    // SMART BITES GATO
          DB::table('content')->insert([
            'page' => 'smartbitesgato',
            'section' => 'banner',
            'field' => 'leyend1',
            'type' => 'txt',
            'value' => '<strong>Smart Bites®</strong> es el alimento ideal para asegurar el bienestar y la salud que tu mascota necesita. Contiene NeuroACTIVE®, un conjunto de ingredientes cuidadosamente seleccionados para desarrollar y preservar la actividad cerebral de tu amigo durante toda su vida.',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesgato',
            'section' => 'banner',
            'field' => 'leyend2',
            'type' => 'txt',
            'value' => 'Nutrirlo con <strong>Smart Bites®</strong> es nutrirlo con <strong>Smart Love®</strong>.',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesgato',
            'section' => 'adulto',
            'field' => 'edad',
            'type' => 'txt',
            'value' => '12 meses en adelante',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesgato',
            'section' => 'adulto',
            'field' => 'presentaciones',
            'type' => 'txt',
            'value' => '15 kg',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesgato',
            'section' => 'beneficios',
            'field' => 'adultotopizqtitulo',
            'type' => 'txt',
            'value' => 'SISTEMA INMUNE Y URINARIO SANOS',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesgato',
            'section' => 'beneficios',
            'field' => 'adultotopizq',
            'type' => 'txt',
            'value' => 'La vitamina E natural promueve células fuertes y protegidas.',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesgato',
            'section' => 'beneficios',
            'field' => 'adultotopdertitulo',
            'type' => 'txt',
            'value' => 'ÓPTIMA SALUD VISUAL',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesgato',
            'section' => 'beneficios',
            'field' => 'adultotopder',
            'type' => 'txt',
            'value' => 'Con vitamina A y taurina que benefician su visión nocturna.',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesgato',
            'section' => 'beneficios',
            'field' => 'adultobottomtituloizq',
            'type' => 'txt',
            'value' => 'CONTROL DE BOLAS DE PELO',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesgato',
            'section' => 'beneficios',
            'field' => 'adultobottomizq',
            'type' => 'txt',
            'value' => 'Las fibras naturales ayudan a minimizar la formación de bolas de pelo.',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesgato',
            'section' => 'beneficios',
            'field' => 'adultobottomtituloder',
            'type' => 'txt',
            'value' => 'SALUD INTESTINAL',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesgato',
            'section' => 'beneficios',
            'field' => 'adultobottomder',
            'type' => 'txt',
            'value' => 'Los prebióticos fortalecen su sistema digestivo, facilitando la absorción de nutrientes.',
          ]);
    // TITAN
          DB::table('content')->insert([
            'page' => 'titan',
            'section' => 'banner',
            'field' => 'leyend1',
            'type' => 'txt',
            'value' => '<strong>Titán®</strong> es el alimento para tu súper mascota que lo mantendrá sano de adentro hacia afuera. Ahora con <strong>NutriPOW®</strong> compuesto por prebióticos, probióticos y sus ingredientes en conjunto que le dan la nutrición que necesita para ser tu súper héroe favorito y estar fuerte en todo momento.',
          ]);
          DB::table('content')->insert([
            'page' => 'titan',
            'section' => 'banner',
            'field' => 'leyend2',
            'type' => 'txt',
            'value' => 'Una mascota <strong>Titán®</strong> es una mascota sana.',
          ]);
      // TITAN PERRO
          DB::table('content')->insert([
            'page' => 'titan',
            'section' => 'perro',
            'field' => 'edad',
            'type' => 'txt',
            'value' => 'Adulto',
          ]);
          DB::table('content')->insert([
            'page' => 'titan',
            'section' => 'perro',
            'field' => 'presentaciones',
            'type' => 'txt',
            'value' => '2, 4, 15 y 25 kg',
          ]);
      // TITAN GATO
          DB::table('content')->insert([
            'page' => 'titan',
            'section' => 'gato',
            'field' => 'edad',
            'type' => 'txt',
            'value' => 'Adulto',
          ]);
          DB::table('content')->insert([
            'page' => 'titan',
            'section' => 'gato',
            'field' => 'presentaciones',
            'type' => 'txt',
            'value' => '15 kg',
          ]);
        // BENEFICIOS
          // PERRO
          DB::table('content')->insert([
            'page' => 'titan',
            'section' => 'beneficios',
            'field' => 'perrotopizqtitulo',
            'type' => 'txt',
            'value' => 'MÚSCULOS FUERTES',
          ]);
          DB::table('content')->insert([
            'page' => 'titan',
            'section' => 'beneficios',
            'field' => 'perrotopizq',
            'type' => 'txt',
            'value' => 'La fuente de proteínas de calidad asegura los nutrientes adecuados para estar sano y fuerte en cada momento.',
          ]);
          DB::table('content')->insert([
            'page' => 'titan',
            'section' => 'beneficios',
            'field' => 'perrotopdertitulo',
            'type' => 'txt',
            'value' => 'PIEL SANA Y PELO BRILLANTE',
          ]);
          DB::table('content')->insert([
            'page' => 'titan',
            'section' => 'beneficios',
            'field' => 'perrotopder',
            'type' => 'txt',
            'value' => 'El conjunto de los ácidos grasos y zinc son la fórmula precisa para tener una piel sana y un pelaje con menos caída.',
          ]);
          DB::table('content')->insert([
            'page' => 'titan',
            'section' => 'beneficios',
            'field' => 'perrobottomizqtitulo',
            'type' => 'txt',
            'value' => 'SISTEMA DIGESTIVO SANO',
          ]);
          DB::table('content')->insert([
            'page' => 'titan',
            'section' => 'beneficios',
            'field' => 'perrobottomizq',
            'type' => 'txt',
            'value' => 'Por su contenido de probióticos y prebióticos ayudan a tener una mejor digestión y heces firmes que facilitan su limpieza.',
          ]);
          DB::table('content')->insert([
            'page' => 'titan',
            'section' => 'beneficios',
            'field' => 'perrobottomdertitulo',
            'type' => 'txt',
            'value' => 'REDUCE GASES Y MAL OLOR',
          ]);
          DB::table('content')->insert([
            'page' => 'titan',
            'section' => 'beneficios',
            'field' => 'perrobottomder',
            'type' => 'txt',
            'value' => 'La mezcla de yucca y fibras naturales favorecen en la reducción de gasesy mal olor en las heces.',
          ]);
          // GATO
          DB::table('content')->insert([
            'page' => 'titan',
            'section' => 'beneficios',
            'field' => 'gatotopizq',
            'type' => 'txt',
            'value' => 'MÚSCULOS FUERTES',
          ]);
          DB::table('content')->insert([
            'page' => 'titan',
            'section' => 'beneficios',
            'field' => 'gatotopizq',
            'type' => 'txt',
            'value' => 'La fuente de proteínas de calidad asegura los nutrientes adecuados para estar sano y fuerte en cada momento.',
          ]);
          DB::table('content')->insert([
            'page' => 'titan',
            'section' => 'beneficios',
            'field' => 'gatotopder',
            'type' => 'txt',
            'value' => 'VISIÓN NOCTURNA',
          ]);
          DB::table('content')->insert([
            'page' => 'titan',
            'section' => 'beneficios',
            'field' => 'gatotopder',
            'type' => 'txt',
            'value' => 'La vitamina A y taurina favorecen su habilidad para realizar sus actividades en ambientes oscuros.',
          ]);
          DB::table('content')->insert([
            'page' => 'titan',
            'section' => 'beneficios',
            'field' => 'gatobottomizq',
            'type' => 'txt',
            'value' => 'SANA DIGESTIÓN',
          ]);
          DB::table('content')->insert([
            'page' => 'titan',
            'section' => 'beneficios',
            'field' => 'gatobottomizq',
            'type' => 'txt',
            'value' => 'Por su contenido de probióticos y probióticos ayudan a tener una salud intestinal, preparando a su organismo para asimilar todos los nutrientes.',
          ]);
          DB::table('content')->insert([
            'page' => 'titan',
            'section' => 'beneficios',
            'field' => 'gatobottomder',
            'type' => 'txt',
            'value' => 'CORAZÓN FUERTE',
          ]);
          DB::table('content')->insert([
            'page' => 'titan',
            'section' => 'beneficios',
            'field' => 'gatobottomder',
            'type' => 'txt',
            'value' => 'La vitamina E protege su corazón para asegurar el cuidado de todo su organismo.',
          ]);
    // ROCKO
          DB::table('content')->insert([
            'page' => 'rocko',
            'section' => 'banner',
            'field' => 'leyend1',
            'type' => 'txt',
            'value' => '<strong>Rocko Plus®</strong> es la línea de alimentos que contiene los nutrientes esenciales y de calidad que cuidan a las mascotas y la economía de sus dueños.',
          ]);
          DB::table('content')->insert([
            'page' => 'rocko',
            'section' => 'banner',
            'field' => 'leyend2',
            'type' => 'txt',
            'value' => '<strong>Rocko Plus®</strong> es… Calidad Plus para ver a tu can ¡Radiante y feliz!®',
          ]);
      // ROCKO COMPLETE
          DB::table('content')->insert([
            'page' => 'rocko',
            'section' => 'complete',
            'field' => 'edad',
            'type' => 'txt',
            'value' => 'Adulto',
          ]);
          DB::table('content')->insert([
            'page' => 'rocko',
            'section' => 'complete',
            'field' => 'presentaciones',
            'type' => 'txt',
            'value' => '22 kg',
          ]);
      // ROCKO PODER
          DB::table('content')->insert([
            'page' => 'rocko',
            'section' => 'plus',
            'field' => 'edad',
            'type' => 'txt',
            'value' => 'Adulto',
          ]);
          DB::table('content')->insert([
            'page' => 'rocko',
            'section' => 'plus',
            'field' => 'presentaciones',
            'type' => 'txt',
            'value' => '25 kg',
          ]);
      // BENEFICIOS
        // ROCKO COMPLETE
          DB::table('content')->insert([
            'page' => 'rocko',
            'section' => 'beneficios',
            'field' => 'completetopizqtitulo',
            'type' => 'txt',
            'value' => 'Con proteína de pollo',
          ]);
          DB::table('content')->insert([
            'page' => 'rocko',
            'section' => 'beneficios',
            'field' => 'completetopizq',
            'type' => 'txt',
            'value' => 'Fuente principal de aminoácidos.',
          ]);
          DB::table('content')->insert([
            'page' => 'rocko',
            'section' => 'beneficios',
            'field' => 'completetopdertitulo',
            'type' => 'txt',
            'value' => 'Placeholder',
          ]);
          DB::table('content')->insert([
            'page' => 'rocko',
            'section' => 'beneficios',
            'field' => 'completetopder',
            'type' => 'txt',
            'value' => 'Placeholder.',
          ]);
          DB::table('content')->insert([
            'page' => 'rocko',
            'section' => 'beneficios',
            'field' => 'completebottomizqtitulo',
            'type' => 'txt',
            'value' => 'Vitaminas y minerales esenciales',
          ]);
          DB::table('content')->insert([
            'page' => 'rocko',
            'section' => 'beneficios',
            'field' => 'completebottomizq',
            'type' => 'txt',
            'value' => 'Para una nutrición completa y balanceada.',
          ]);
          DB::table('content')->insert([
            'page' => 'rocko',
            'section' => 'beneficios',
            'field' => 'completebottomdertitulo',
            'type' => 'txt',
            'value' => 'Placeholder',
          ]);
          DB::table('content')->insert([
            'page' => 'rocko',
            'section' => 'beneficios',
            'field' => 'completebottomder',
            'type' => 'txt',
            'value' => 'Placeholder.',
          ]);
        // ROCKO PODER
          DB::table('content')->insert([
            'page' => 'rocko',
            'section' => 'beneficios',
            'field' => 'podertopizqtitulo',
            'type' => 'txt',
            'value' => 'Con proteína de pollo',
          ]);
          DB::table('content')->insert([
            'page' => 'rocko',
            'section' => 'beneficios',
            'field' => 'podertopizq',
            'type' => 'txt',
            'value' => 'Fuente principal de aminoácidos.',
          ]);
          DB::table('content')->insert([
            'page' => 'rocko',
            'section' => 'beneficios',
            'field' => 'podertopdertitulo',
            'type' => 'txt',
            'value' => 'Con prebióticos',
          ]);
          DB::table('content')->insert([
            'page' => 'rocko',
            'section' => 'beneficios',
            'field' => 'podertopder',
            'type' => 'txt',
            'value' => 'Para una nutrición completa y balanceada.',
          ]);
          DB::table('content')->insert([
            'page' => 'rocko',
            'section' => 'beneficios',
            'field' => 'poderbottomtituloizq',
            'type' => 'txt',
            'value' => 'Vitaminas y minerales esenciales',
          ]);
          DB::table('content')->insert([
            'page' => 'rocko',
            'section' => 'beneficios',
            'field' => 'poderbottomizq',
            'type' => 'txt',
            'value' => 'Para una salud intestinal y heces firmes.',
          ]);
          DB::table('content')->insert([
            'page' => 'rocko',
            'section' => 'beneficios',
            'field' => 'poderbottomtituloder',
            'type' => 'txt',
            'value' => 'Placeholder',
          ]);
          DB::table('content')->insert([
            'page' => 'rocko',
            'section' => 'beneficios',
            'field' => 'poderbottomder',
            'type' => 'txt',
            'value' => 'Placeholder.',
          ]);
    }
}





