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
            'field' => 'cachorrotopizq',
            'type' => 'txt',
            'value' => 'Balance de vitaminas y minerales que elevan sus defensas.',
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
            'field' => 'cachorrobottomizq',
            'type' => 'txt',
            'value' => 'Con nutrientes ideales para el sano crecimiento de huesos y dientes.',
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
            'field' => 'pequeñostopizq',
            'type' => 'txt',
            'value' => 'Balance de vitaminas y minerales que elevan sus defensas.',
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
            'field' => 'pequeñosbottomizq',
            'type' => 'txt',
            'value' => 'El equilibrio de nutrientes le proporciona la energía óptima.',
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
            'field' => 'adultotopizq',
            'type' => 'txt',
            'value' => 'Balance de vitaminas y minerales que elevan sus defensas para un organismo sano.',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'adultotopder',
            'type' => 'txt',
            'value' => 'La vitamina E natural protege las células del corazón.',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesperro',
            'section' => 'beneficios',
            'field' => 'adultobottomizq',
            'type' => 'txt',
            'value' => 'El omega 3 ayuda a mantener su piel saludable y pelaje brillante.',
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
            'field' => 'seniortopizq',
            'type' => 'txt',
            'value' => 'Con glucosamina que mejora su movilidad.',
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
            'field' => 'seniorbottomizq',
            'type' => 'txt',
            'value' => 'Balance de vitaminas y minerales que elevan sus defensas.',
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
            'field' => 'adultotopizq',
            'type' => 'txt',
            'value' => 'La vitamina E natural promueve células fuertes y protegidas.',
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
            'field' => 'adultobottomizq',
            'type' => 'txt',
            'value' => 'Las fibras naturales ayudan a minimizar la formación de bolas de pelo.',
          ]);
          DB::table('content')->insert([
            'page' => 'smartbitesgato',
            'section' => 'beneficios',
            'field' => 'adultobottomder',
            'type' => 'txt',
            'value' => 'Los prebióticos fortalecen su sistema digestivo, facilitando la absorción de nutrientes.',
          ]);
    }
}





