<?php if (isset($component)) { $__componentOriginalfef4cfd571f8ae938848198eae0a6e27 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfef4cfd571f8ae938848198eae0a6e27 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.public.public','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.public.public'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">

            <div class="text-justify mb-12">
                <h1 class="mb-8 text-4xl text-center font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    AVISO DE PRIVACIDAD
                </h1>

                <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
                    El Laboratorio de Computación Afectiva e Innovación Educativa (CAFINED) del
                    Instituto Tecnológico Superior de Misantla, con domicilio en Loma del Cojolite, km 1.8
                    s/n, C.P. 93850, Misantla, Veracruz, es el responsable del tratamiento de los datos
                    personales que se recaben a través de la aplicación móvil <strong>“OrientaTec”</strong>.
                </p>

                <h2 class="mt-8 mb-4 text-2xl font-bold text-gray-900 dark:text-white">
                    Fundamento legal
                </h2>
                <p class="mb-4 text-gray-500 dark:text-gray-400">
                    El tratamiento de los datos personales se realiza conforme a lo dispuesto en los
                    artículos 1, 2, 6, 8, 15, 16, 22, 26, 33, 36 y demás relativos y aplicables de la Ley Federal
                    de Protección de Datos Personales en Posesión de los Particulares (LFPDPPP).
                </p>

                <h2 class="mt-8 mb-4 text-2xl font-bold text-gray-900 dark:text-white">
                    Datos recabados
                </h2>
                <p class="mb-2 text-gray-500 dark:text-gray-400">
                    Los datos personales que se recaban a través de la aplicación son:
                </p>
                <ul class="mb-4 list-disc list-inside text-gray-500 dark:text-gray-400 ml-4">
                    <li>Nombre y apellidos.</li>
                    <li>Género.</li>
                    <li>Correo electrónico.</li>
                    <li>Contraseña (almacenada de forma filtrada).</li>
                    <li>Municipio de residencia.</li>
                    <li>Escuela de bachillerato de procedencia.</li>
                    <li>Respuestas y resultados del test de orientación vocacional.</li>
                    <li>Información técnica y de uso de la aplicación.</li>
                </ul>
                <p class="mb-4 text-gray-500 dark:text-gray-400">
                    No se recaban datos personales sensibles, ya que el test vocacional se limita a
                    intereses académicos y profesionales.
                </p>
                <p class="mb-4 text-gray-500 dark:text-gray-400">
                    La aplicación está dirigida a menores de edad, por lo que el tratamiento de sus datos
                    personales se realiza con el consentimiento y bajo la supervisión de su padre,
                    madre o tutor legal, quien acepta el presente Aviso de Privacidad en representación
                    del menor.
                </p>

                <h2 class="mt-8 mb-4 text-2xl font-bold text-gray-900 dark:text-white">
                    Procesamiento de los datos
                </h2>
                <p class="mb-2 text-gray-500 dark:text-gray-400">
                    Los datos personales recabados serán utilizados para las siguientes finalidades:
                </p>
                <ul class="mb-4 list-disc list-inside text-gray-500 dark:text-gray-400 ml-4">
                    <li>Permitir el registro y autenticación de usuarios.</li>
                    <li>Aplicar y generar resultados del test de orientación vocacional.</li>
                    <li>Brindar orientación académica y escolar.</li>
                    <li>Elaborar análisis con fines educativos, académicos y de investigación.</li>
                    <li>Generar estadísticas relacionadas con la orientación vocacional.</li>
                </ul>
                <p class="mb-4 font-semibold text-gray-500 dark:text-gray-400">
                    Los datos personales no serán utilizados con fines comerciales, publicitarios ni de lucro.
                </p>

                <h2 class="mt-8 mb-4 text-2xl font-bold text-gray-900 dark:text-white">
                    Uso y compartición de resultados
                </h2>
                <p class="mb-2 text-gray-500 dark:text-gray-400">
                    La información recabada y los resultados del test:
                </p>
                <ul class="mb-4 list-disc list-inside text-gray-500 dark:text-gray-400 ml-4">
                    <li>Podrán ser consultados por el propio usuario.</li>
                    <li>Serán utilizados de forma estadística y anonimizada para investigación.</li>
                    <li>Podrán compartirse con personal administrativo del Instituto Tecnológico Superior de Misantla, exclusivamente para fines académicos, educativos y de planeación institucional.</li>
                </ul>
                <p class="mb-4 font-semibold text-gray-500 dark:text-gray-400">
                    En ningún caso la información será comercializada.
                </p>

                <h2 class="mt-8 mb-4 text-2xl font-bold text-gray-900 dark:text-white">
                    Uso de servicios de terceros
                </h2>
                <p class="mb-4 text-gray-500 dark:text-gray-400">
                    La aplicación OrientaTec utiliza Firebase Authentication, un servicio proporcionado
                    por Google LLC, para la autenticación de usuarios. Dicho proveedor puede recopilar y
                    tratar información conforme a sus propias políticas de privacidad, las cuales pueden
                    ser consultadas directamente en sus plataformas oficiales.
                </p>
                <p class="mb-4 text-gray-500 dark:text-gray-400">
                    El responsable no controla el tratamiento que dichos terceros realicen de la información.
                </p>

                <h2 class="mt-8 mb-4 text-2xl font-bold text-gray-900 dark:text-white">
                    Transferencia de los datos
                </h2>
                <p class="mb-4 text-gray-500 dark:text-gray-400">
                    No se realizan transferencias de datos personales a terceros distintos del responsable,
                    salvo aquellas permitidas por la LFPDPPP o necesarias para el funcionamiento técnico
                    de la aplicación.
                </p>

                <h2 class="mt-8 mb-4 text-2xl font-bold text-gray-900 dark:text-white">
                    Derechos ARCO
                </h2>
                <p class="mb-4 text-gray-500 dark:text-gray-400">
                    El titular de los datos personales, o su tutor legal tratándose de menores de edad,
                    podrá ejercer sus derechos de Acceso, Rectificación, Cancelación u Oposición
                    (ARCO), conforme a los artículos 22 al 28 de la LFPDPPP, mediante solicitud enviada al
                    correo electrónico: <a href="mailto:cafined.lab@gmail.com" class="text-blue-600 hover:underline">cafined.lab@gmail.com</a>
                </p>

                <h2 class="mt-8 mb-4 text-2xl font-bold text-gray-900 dark:text-white">
                    Eliminación de datos
                </h2>
                <p class="mb-4 text-gray-500 dark:text-gray-400">
                    Los datos personales serán conservados por un plazo máximo de un (1) año contado a
                    partir de la última actividad del usuario en la aplicación.
                </p>
                <p class="mb-4 text-gray-500 dark:text-gray-400">
                    Una vez transcurrido dicho plazo, o a solicitud expresa del usuario o su tutor legal, la
                    cuenta y los datos personales serán eliminados de forma definitiva.
                </p>

                <h2 class="mt-8 mb-4 text-2xl font-bold text-gray-900 dark:text-white">
                    Seguridad
                </h2>
                <p class="mb-4 text-gray-500 dark:text-gray-400">
                    El responsable implementa medidas de seguridad administrativas y técnicas
                    razonables para proteger los datos personales contra daño, pérdida, alteración,
                    destrucción o uso no autorizado, en términos de la LFPDPPP.
                </p>

                <h2 class="mt-8 mb-4 text-2xl font-bold text-gray-900 dark:text-white">
                    Cambios al aviso de privacidad
                </h2>
                <p class="mb-4 text-gray-500 dark:text-gray-400">
                    El presente Aviso de Privacidad podrá ser modificado en cualquier momento para
                    cumplir con actualizaciones legales o mejoras del proyecto. Cualquier modificación
                    será comunicada a través de la aplicación.
                </p>

                <h2 class="mt-8 mb-4 text-2xl font-bold text-gray-900 dark:text-white">
                    Aceptación
                </h2>
                <p class="mb-4 text-gray-500 dark:text-gray-400">
                    El uso de la aplicación implica que el usuario y, en su caso, su tutor legal, han leído,
                    comprendido y aceptan el presente Aviso de Privacidad.
                </p>

            </div>
        </div>
    </section>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfef4cfd571f8ae938848198eae0a6e27)): ?>
<?php $attributes = $__attributesOriginalfef4cfd571f8ae938848198eae0a6e27; ?>
<?php unset($__attributesOriginalfef4cfd571f8ae938848198eae0a6e27); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfef4cfd571f8ae938848198eae0a6e27)): ?>
<?php $component = $__componentOriginalfef4cfd571f8ae938848198eae0a6e27; ?>
<?php unset($__componentOriginalfef4cfd571f8ae938848198eae0a6e27); ?>
<?php endif; ?><?php /**PATH /var/www/vhosts/cafined.org/v2.cafined.org/resources/views/frontend/info/orientatecprivacidad.blade.php ENDPATH**/ ?>