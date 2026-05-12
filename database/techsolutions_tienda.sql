-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: techsolutions_tienda
-- ------------------------------------------------------
-- Server version	8.0.44

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `articulos`
--

DROP TABLE IF EXISTS `articulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `articulos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `contenido` text NOT NULL,
  `articulo` longtext NOT NULL,
  `fecha` date NOT NULL,
  `tiempo_lectura` varchar(50) NOT NULL,
  `categorias` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articulos`
--

LOCK TABLES `articulos` WRITE;
/*!40000 ALTER TABLE `articulos` DISABLE KEYS */;
INSERT INTO `articulos` VALUES (1,'Transformación Digital: la clave para la competitividad en 2025','La transformación digital ya no es opcional, es una necesidad estratégica para cualquier empresa que desee mantenerse competitiva. \r\n La adopción de tecnologías como la inteligencia artificial, el análisis de datos y la automatización de procesos permite a las organizaciones optimizar costos, mejorar la experiencia del cliente y acelerar la innovación.','<p>\r\nAdoptar la transformación digital implica mucho más que implementar herramientas tecnológicas; se trata de \r\n<b>cambiar la cultura organizacional, los modelos de negocio y la forma en que las empresas crean valor para sus clientes</b>. \r\nDesde la automatización de procesos hasta el análisis avanzado de datos, cada decisión debe estar orientada a mejorar la eficiencia y la experiencia del cliente.\r\n</p>\r\n\r\n<h3>Tendencias clave en 2025</h3>\r\n<ul>\r\n    <li><b>Inteligencia artificial y machine learning:</b> usados para predecir patrones de consumo, optimizar cadenas de suministro y ofrecer experiencias personalizadas.</li>\r\n    <li><b>Ciberseguridad avanzada:</b> indispensable para proteger los datos en un entorno donde los ataques informáticos aumentan en frecuencia y sofisticación.</li>\r\n    <li><b>Computación en la nube:</b> que permite escalar servicios de manera flexible y reducir costos de infraestructura.</li>\r\n    <li><b>Internet de las cosas (IoT):</b> aplicado en la industria, la logística y el comercio para conectar dispositivos y obtener información en tiempo real.</li>\r\n    <li><b>Experiencias digitales inmersivas:</b> con realidad aumentada y virtual, que redefinen la forma en que los clientes interactúan con productos y servicios.</li>\r\n</ul>\r\n\r\n<p>\r\nLas empresas que comprendan que la transformación digital no es un proyecto con fecha de finalización, sino un \r\n<b>proceso continuo de adaptación y evolución</b>, estarán mejor preparadas para enfrentar los retos del futuro.\r\n</p>\r\n\r\n<p>\r\n<i>En conclusión</i>, la <b>transformación digital en 2025 será el motor que determine qué empresas lideran y cuáles quedan rezagadas</b>. \r\nLa clave está en combinar tecnología con visión estratégica, priorizando siempre la innovación y la satisfacción del cliente como ejes centrales del cambio.\r\n</p>','2025-09-12','4 min','innovacion,cloud,ciberseguridad','../assets/img/tecnologia.jpg'),(2,'Cloud híbrida: el futuro de la infraestructura empresarial','El modelo de nube híbrida está ganando terreno en el mundo empresarial, ya que combina lo mejor de la nube pública y privada. \r\n Permite flexibilidad, seguridad y escalabilidad, garantizando que las empresas puedan adaptarse rápidamente a las demandas del mercado.','<h2>Cloud híbrida: el futuro de la infraestructura empresarial</h2>\r\n\r\n<p>\r\nEn un mundo donde la tecnología avanza a pasos agigantados, las empresas se enfrentan al reto de encontrar soluciones flexibles, seguras y escalables para gestionar su infraestructura tecnológica. \r\nEn este contexto, la <b>cloud híbrida</b> se ha convertido en la opción más atractiva para organizaciones que buscan combinar lo mejor de la nube pública y privada, adaptándose a las necesidades cambiantes de sus operaciones.\r\n</p>\r\n\r\n<h3>¿Qué es la cloud híbrida?</h3>\r\n<p>\r\nLa cloud híbrida es un modelo que integra recursos de <b>nube pública</b> (como AWS, Microsoft Azure o Google Cloud) con <b>nube privada</b> (infraestructura propia o servicios dedicados), \r\npermitiendo que los datos y aplicaciones se muevan de forma ágil entre ambas. Esto proporciona a las empresas un entorno flexible, en el que pueden aprovechar los beneficios de cada tipo de nube según sus objetivos.\r\n</p>\r\n\r\n<h3>Ventajas clave de la cloud híbrida</h3>\r\n<ul>\r\n  <li><b>Escalabilidad flexible:</b> las empresas pueden aumentar o reducir recursos en la nube pública según la demanda, sin comprometer la seguridad de sus datos sensibles.</li>\r\n  <li><b>Optimización de costos:</b> se invierte en infraestructura privada solo para lo esencial, mientras que la nube pública absorbe cargas temporales o proyectos específicos.</li>\r\n  <li><b>Seguridad y cumplimiento:</b> los datos críticos se mantienen en entornos privados, mientras que las aplicaciones menos sensibles se gestionan en la nube pública.</li>\r\n  <li><b>Innovación acelerada:</b> al integrar ambas nubes, las empresas pueden experimentar con inteligencia artificial, análisis de datos o IoT sin comprometer la operación diaria.</li>\r\n</ul>\r\n\r\n<h3>Casos de uso más comunes</h3>\r\n<p>\r\nLa cloud híbrida se adapta a múltiples industrias y escenarios:\r\n</p>\r\n<ul>\r\n  <li><b>Sector financiero:</b> protege información sensible en la nube privada y utiliza la pública para ofrecer aplicaciones móviles a clientes.</li>\r\n  <li><b>Retail:</b> maneja picos de tráfico en temporadas de ofertas migrando parte de la operación a la nube pública.</li>\r\n  <li><b>Salud:</b> almacena historiales clínicos en servidores privados, mientras que las herramientas de telemedicina funcionan en la nube pública.</li>\r\n</ul>\r\n\r\n<h3>Desafíos a considerar</h3>\r\n<p>\r\nA pesar de sus ventajas, implementar una cloud híbrida requiere una planificación adecuada:\r\n</p>\r\n<ul>\r\n  <li><b>Gestión de la complejidad:</b> coordinar dos entornos distintos puede ser un reto si no se cuenta con herramientas de monitoreo integradas.</li>\r\n  <li><b>Conectividad:</b> se necesita una red confiable para garantizar la comunicación entre ambas nubes sin interrupciones.</li>\r\n  <li><b>Seguridad unificada:</b> deben aplicarse políticas de ciberseguridad que cubran tanto la nube pública como la privada.</li>\r\n</ul>\r\n\r\n<h3>Conclusión</h3>\r\n<p>\r\nLa <b>cloud híbrida</b> representa el futuro de la infraestructura empresarial porque ofrece lo mejor de ambos mundos: flexibilidad, innovación y seguridad. \r\nEn 2025 y los años venideros, aquellas empresas que adopten este modelo estarán mejor posicionadas para responder a las demandas del mercado, optimizar sus recursos y mantener la competitividad en un entorno digital cada vez más exigente.\r\n</p>','2025-09-01','3 min','cloud,innovacion','../assets/img/nube.jpg'),(3,'Ciberseguridad 2025: nuevas amenazas y cómo protegerse','Con el aumento de los ataques cibernéticos, las empresas necesitan adoptar medidas más sofisticadas de protección. \r\n Desde la autenticación multifactor hasta el uso de inteligencia artificial para la detección de anomalías, la ciberseguridad es ahora una prioridad de primer nivel.','<h2>Ciberseguridad 2025: nuevas amenazas y cómo protegerse</h2>\r\n\r\n<p>\r\nEl panorama digital evoluciona rápidamente, y con él también lo hacen las amenazas cibernéticas. En 2025, las organizaciones y los usuarios enfrentan \r\nretos cada vez más sofisticados que ponen en riesgo la <b>confidencialidad, integridad y disponibilidad</b> de la información. \r\nLa ciberseguridad ya no es una opción, sino una necesidad crítica para la continuidad de cualquier negocio.\r\n</p>\r\n\r\n<h3>Nuevas amenazas en 2025</h3>\r\n<ul>\r\n  <li><b>Ciberataques impulsados por IA:</b> los atacantes utilizan inteligencia artificial para crear malware adaptativo, ataques de phishing más realistas y campañas automatizadas a gran escala.</li>\r\n  <li><b>Ransomware como servicio (RaaS):</b> los grupos criminales ofrecen kits de ransomware a terceros, facilitando que cualquier persona con pocos conocimientos pueda ejecutar ataques.</li>\r\n  <li><b>Ataques a dispositivos IoT:</b> la proliferación de dispositivos inteligentes en hogares y empresas amplía la superficie de ataque, siendo objetivo de secuestros y espionaje.</li>\r\n  <li><b>Suplantación de identidad profunda (deepfakes):</b> videos y audios falsificados con IA se utilizan para estafas financieras o manipulación de información.</li>\r\n  <li><b>Crimen cibernético en la nube:</b> la dependencia de infraestructuras cloud convierte a estos entornos en blancos prioritarios para el robo de datos sensibles.</li>\r\n</ul>\r\n\r\n<h3>Estrategias de protección</h3>\r\n<p>\r\nFrente a estas amenazas, las empresas y usuarios deben reforzar sus medidas de seguridad:\r\n</p>\r\n<ul>\r\n  <li><b>Autenticación multifactor (MFA):</b> una capa adicional de seguridad para evitar accesos no autorizados.</li>\r\n  <li><b>Zero Trust:</b> modelo de seguridad que asume que ninguna conexión es segura, verificando cada acceso de manera constante.</li>\r\n  <li><b>Copias de seguridad regulares:</b> mantener respaldos cifrados para mitigar los daños de un ataque de ransomware.</li>\r\n  <li><b>Capacitación en ciberseguridad:</b> concienciar a los empleados sobre phishing, ingeniería social y uso responsable de la tecnología.</li>\r\n  <li><b>Monitoreo con IA:</b> utilizar inteligencia artificial defensiva para detectar anomalías en tiempo real y responder de manera proactiva.</li>\r\n</ul>\r\n\r\n<h3>Tendencias hacia el futuro</h3>\r\n<p>\r\nEn los próximos años, veremos una integración más estrecha entre la <b>ciberseguridad y la inteligencia artificial</b>, \r\nasí como un mayor enfoque en normativas de cumplimiento (como GDPR o regulaciones locales en Latinoamérica). \r\nLa colaboración internacional será clave para combatir el cibercrimen a gran escala.\r\n</p>\r\n\r\n<h3>Conclusión</h3>\r\n<p>\r\nLa <b>ciberseguridad en 2025</b> se enfrenta a un escenario más desafiante que nunca. \r\nLas organizaciones que prioricen la prevención, adopten tecnologías avanzadas y eduquen a sus equipos estarán mejor preparadas \r\npara hacer frente a los riesgos digitales y garantizar la confianza de sus clientes y socios.\r\n</p>','2025-08-20','5 min','ciberseguridad,cloud,redes','../assets/img/amenazas.jpg'),(4,'La innovación como motor de crecimiento empresarial','La innovación no solo se trata de crear nuevos productos, sino también de mejorar los procesos internos, la cultura organizacional y la forma en que se entrega valor a los clientes. \r\n Las empresas que priorizan la innovación logran mayor competitividad y sostenibilidad a largo plazo.','<h2>La innovación como motor de crecimiento empresarial</h2>\r\n\r\n<p>\r\nEn un entorno de negocios caracterizado por la <b>competencia global</b> y el rápido avance tecnológico, la innovación se ha convertido en el \r\nprincipal motor de crecimiento empresarial. No se trata únicamente de crear nuevos productos o servicios, sino de replantear procesos, \r\nmodelos de negocio y formas de conectar con los clientes para generar valor sostenible.\r\n</p>\r\n\r\n<h3>¿Por qué la innovación es clave?</h3>\r\n<p>\r\nLas empresas que priorizan la innovación logran <b>diferenciarse</b> en un mercado saturado, captar nuevas oportunidades y adaptarse \r\ncon mayor rapidez a los cambios del entorno. La innovación permite:\r\n</p>\r\n<ul>\r\n  <li><b>Anticiparse a las necesidades del cliente:</b> comprendiendo mejor sus expectativas y ofreciendo soluciones personalizadas.</li>\r\n  <li><b>Optimizar procesos internos:</b> reduciendo costos, tiempos y recursos mediante tecnologías emergentes.</li>\r\n  <li><b>Generar nuevas fuentes de ingresos:</b> explorando modelos de negocio disruptivos y productos digitales.</li>\r\n  <li><b>Fortalecer la cultura organizacional:</b> impulsando la creatividad, la colaboración y la adaptabilidad dentro de la empresa.</li>\r\n</ul>\r\n\r\n<h3>Áreas de innovación empresarial</h3>\r\n<p>\r\nLa innovación puede aplicarse en distintas áreas estratégicas:\r\n</p>\r\n<ul>\r\n  <li><b>Productos y servicios:</b> desarrollo de soluciones innovadoras que aporten mayor valor al cliente.</li>\r\n  <li><b>Procesos internos:</b> automatización y digitalización de flujos de trabajo.</li>\r\n  <li><b>Modelos de negocio:</b> adopción de esquemas de economía colaborativa, suscripciones o plataformas digitales.</li>\r\n  <li><b>Experiencia del cliente:</b> mejorar la interacción con interfaces digitales, chatbots, realidad aumentada o experiencias personalizadas.</li>\r\n</ul>\r\n\r\n<h3>El papel de la tecnología en la innovación</h3>\r\n<p>\r\nLas tecnologías emergentes —como la <b>inteligencia artificial, la nube, el IoT y la analítica de datos</b>— permiten a las empresas \r\ntomar decisiones más informadas, ofrecer productos más inteligentes y optimizar sus operaciones. \r\nAquellas organizaciones que adopten estas herramientas de forma estratégica estarán mejor preparadas para crecer.\r\n</p>\r\n\r\n<h3>Cultura de innovación</h3>\r\n<p>\r\nLa innovación no debe ser exclusiva del área de I+D. Requiere una <b>cultura organizacional</b> que fomente la creatividad, \r\nel aprendizaje continuo y la apertura al cambio. Las empresas exitosas en 2025 serán aquellas que conviertan la innovación en un \r\nproceso constante, donde cada colaborador pueda aportar ideas y soluciones.\r\n</p>\r\n\r\n<h3>Conclusión</h3>\r\n<p>\r\nLa <b>innovación empresarial</b> es mucho más que una ventaja competitiva: es una condición necesaria para la supervivencia y el crecimiento \r\nsostenible en un mundo cada vez más cambiante. Las compañías que la integren en su estrategia estarán en mejor posición para liderar su industria \r\ny construir un futuro sólido.\r\n</p>','2025-08-10','2 min','innovacion,startups','../assets/img/innovacion_tec.jpg'),(5,'Inteligencia Artificial: más allá de los chatbots','La IA está transformando todos los sectores, desde la atención médica hasta las finanzas. \r\n Más allá de los chatbots, las empresas están utilizando IA para análisis predictivo, mantenimiento preventivo y personalización de experiencias para los clientes.','<h2>Inteligencia Artificial: más allá de los chatbots</h2>\r\n\r\n<p>\r\nLa <b>Inteligencia Artificial (IA)</b> ha pasado de ser un concepto futurista a convertirse en una tecnología esencial en múltiples industrias. \r\nAunque muchas personas la asocian únicamente con <b>chatbots y asistentes virtuales</b>, su alcance va mucho más allá. \r\nLa IA está transformando la forma en que trabajamos, interactuamos y hacemos negocios.\r\n</p>\r\n\r\n<h3>Aplicaciones actuales de la IA</h3>\r\n<p>\r\nLa IA se ha integrado en diferentes sectores, ofreciendo soluciones innovadoras y generando eficiencia:\r\n</p>\r\n<ul>\r\n  <li><b>Salud:</b> diagnóstico asistido por IA, análisis de imágenes médicas y medicina personalizada.</li>\r\n  <li><b>Finanzas:</b> detección de fraudes, predicciones de mercado y asesoría financiera automatizada.</li>\r\n  <li><b>Logística:</b> optimización de rutas, gestión de inventarios y cadenas de suministro inteligentes.</li>\r\n  <li><b>Educación:</b> plataformas de aprendizaje adaptativo que personalizan los contenidos según el progreso del alumno.</li>\r\n  <li><b>Industria:</b> mantenimiento predictivo, control de calidad y automatización de procesos.</li>\r\n</ul>\r\n\r\n<h3>Más allá de los chatbots</h3>\r\n<p>\r\nSi bien los chatbots son una aplicación popular de la IA, la verdadera revolución está en su capacidad de \r\n<b>aprender de los datos</b> y tomar decisiones complejas. La combinación de <b>machine learning</b>, <b>deep learning</b> y \r\n<b>procesamiento del lenguaje natural</b> abre posibilidades que superan ampliamente la atención al cliente.\r\n</p>\r\n\r\n<h3>Beneficios de la adopción de IA</h3>\r\n<ul>\r\n  <li><b>Automatización de tareas repetitivas:</b> permitiendo a los empleados enfocarse en actividades estratégicas.</li>\r\n  <li><b>Mejora en la toma de decisiones:</b> gracias al análisis de grandes volúmenes de datos en tiempo real.</li>\r\n  <li><b>Reducción de costos operativos:</b> al optimizar procesos y detectar errores antes de que ocurran.</li>\r\n  <li><b>Personalización:</b> creación de experiencias únicas para cada cliente o usuario.</li>\r\n</ul>\r\n\r\n<h3>Retos y consideraciones</h3>\r\n<p>\r\nEl avance de la IA también plantea <b>desafíos éticos y de seguridad</b>. Entre los más relevantes se encuentran:\r\n</p>\r\n<ul>\r\n  <li>La privacidad y protección de los datos personales.</li>\r\n  <li>La posible sustitución de empleos por la automatización.</li>\r\n  <li>El riesgo de sesgos en los algoritmos.</li>\r\n</ul>\r\n\r\n<h3>Conclusión</h3>\r\n<p>\r\nLa <b>Inteligencia Artificial</b> no es solo el motor detrás de los chatbots, sino una fuerza transformadora que \r\nimpulsa la evolución de los negocios, la ciencia y la sociedad en su conjunto. \r\nEl futuro dependerá de cómo adoptemos esta tecnología, asegurando que su desarrollo sea ético, inclusivo y orientado \r\na mejorar la calidad de vida de las personas.\r\n</p>','2025-07-28','6 min','ai,innovacion,productividad','../assets/img/ia.jpg'),(6,'IoT en las empresas: eficiencia conectada','El Internet de las Cosas permite conectar dispositivos para recopilar y analizar datos en tiempo real. \r\n Las empresas están utilizando IoT para optimizar cadenas de suministro, gestionar flotas y mejorar la seguridad en las instalaciones.','<h2>IoT en las empresas: eficiencia conectada</h2>\r\n\r\n<p>\r\nEl <b>Internet de las Cosas (IoT)</b> se ha convertido en una de las tecnologías más transformadoras de la era digital. \r\nGracias a la conexión de dispositivos, sensores y máquinas a internet, las empresas pueden obtener información en tiempo real, \r\noptimizar procesos y mejorar la toma de decisiones estratégicas.\r\n</p>\r\n\r\n<h3>¿Qué es el IoT empresarial?</h3>\r\n<p>\r\nEl IoT empresarial consiste en la integración de dispositivos inteligentes dentro de las operaciones de una compañía. \r\nEstos dispositivos recolectan datos y los transmiten a plataformas que los procesan, \r\npermitiendo <b>automatizar tareas</b> y generar <b>eficiencia operativa</b>.\r\n</p>\r\n\r\n<h3>Aplicaciones del IoT en las empresas</h3>\r\n<ul>\r\n  <li><b>Manufactura inteligente:</b> sensores que supervisan maquinaria para realizar <b>mantenimiento predictivo</b> y evitar fallas.</li>\r\n  <li><b>Logística y transporte:</b> rastreo en tiempo real de vehículos y paquetes, optimizando tiempos de entrega.</li>\r\n  <li><b>Retail:</b> análisis de comportamiento de compra y control de inventarios automatizados.</li>\r\n  <li><b>Oficinas inteligentes:</b> control de iluminación, climatización y consumo energético para reducir costos.</li>\r\n  <li><b>Salud:</b> dispositivos médicos conectados que permiten el monitoreo remoto de pacientes.</li>\r\n</ul>\r\n\r\n<h3>Beneficios del IoT</h3>\r\n<ul>\r\n  <li><b>Mayor eficiencia:</b> reducción de tiempos y costos gracias a la automatización.</li>\r\n  <li><b>Toma de decisiones basada en datos:</b> información en tiempo real que mejora la gestión empresarial.</li>\r\n  <li><b>Experiencia del cliente mejorada:</b> servicios personalizados y procesos más rápidos.</li>\r\n  <li><b>Sostenibilidad:</b> optimización del consumo energético y reducción de desperdicios.</li>\r\n</ul>\r\n\r\n<h3>Retos del IoT</h3>\r\n<p>\r\nA pesar de sus ventajas, la implementación del IoT también plantea desafíos importantes:\r\n</p>\r\n<ul>\r\n  <li><b>Ciberseguridad:</b> proteger dispositivos conectados contra ataques.</li>\r\n  <li><b>Compatibilidad:</b> integrar múltiples dispositivos y plataformas.</li>\r\n  <li><b>Costos iniciales:</b> inversión en infraestructura y capacitación.</li>\r\n</ul>\r\n\r\n<h3>Conclusión</h3>\r\n<p>\r\nEl <b>IoT en las empresas</b> es mucho más que una tendencia: es una estrategia clave para lograr eficiencia, innovación y competitividad. \r\nAquellas compañías que adopten estas soluciones conectadas estarán en mejores condiciones de enfrentar los retos del futuro \r\ny ofrecer un valor diferencial a sus clientes.\r\n</p>','2025-07-15','3 min','iot,redes,innovacion','../assets/img/iot.jpg'),(7,'Productividad digital: herramientas que marcan la diferencia','El uso de plataformas de colaboración, gestión de proyectos y automatización ha demostrado incrementar la productividad de los equipos. \r\n Adoptar estas herramientas ayuda a optimizar tiempos, reducir errores y mejorar la comunicación entre áreas.','<h2>Productividad digital: herramientas que marcan la diferencia</h2>\r\n\r\n<p>\r\nEn la actualidad, la <b>productividad digital</b> se ha convertido en un factor clave para la competitividad de las empresas. \r\nLas organizaciones que adoptan herramientas digitales adecuadas logran optimizar sus procesos, mejorar la colaboración y reducir costos operativos.\r\n</p>\r\n\r\n<h3>¿Qué entendemos por productividad digital?</h3>\r\n<p>\r\nLa productividad digital es el resultado de aplicar <b>tecnologías, aplicaciones y plataformas digitales</b> para \r\nautomatizar tareas, gestionar recursos y facilitar la comunicación entre equipos. \r\nNo se trata solo de trabajar más rápido, sino de trabajar de manera <b>más inteligente y eficiente</b>.\r\n</p>\r\n\r\n<h3>Herramientas que impulsan la productividad</h3>\r\n<ul>\r\n  <li><b>Gestión de proyectos:</b> plataformas como <i>Trello, Asana o Monday</i> permiten organizar tareas, asignar responsables y dar seguimiento en tiempo real.</li>\r\n  <li><b>Comunicación y colaboración:</b> aplicaciones como <i>Slack, Microsoft Teams o Google Workspace</i> facilitan el trabajo en equipo, incluso en entornos remotos.</li>\r\n  <li><b>Automatización de procesos:</b> herramientas como <i>Zapier o Power Automate</i> ayudan a integrar sistemas y eliminar tareas repetitivas.</li>\r\n  <li><b>Almacenamiento en la nube:</b> servicios como <i>Google Drive, Dropbox o OneDrive</i> garantizan acceso seguro y compartido a documentos desde cualquier lugar.</li>\r\n  <li><b>Análisis de datos:</b> soluciones como <i>Tableau o Power BI</i> permiten transformar datos en información valiosa para la toma de decisiones.</li>\r\n</ul>\r\n\r\n<h3>Beneficios de adoptar estas herramientas</h3>\r\n<ul>\r\n  <li><b>Aumento de la eficiencia:</b> menos tiempo en tareas manuales y mayor enfoque en actividades estratégicas.</li>\r\n  <li><b>Mejora en la comunicación:</b> equipos más conectados y colaborativos.</li>\r\n  <li><b>Flexibilidad laboral:</b> posibilidad de trabajar desde cualquier lugar sin perder productividad.</li>\r\n  <li><b>Toma de decisiones más ágil:</b> acceso inmediato a información clave.</li>\r\n</ul>\r\n\r\n<h3>Desafíos en la implementación</h3>\r\n<p>\r\nAunque los beneficios son claros, las empresas también enfrentan desafíos al adoptar herramientas de productividad digital:\r\n</p>\r\n<ul>\r\n  <li><b>Resistencia al cambio:</b> algunos colaboradores pueden mostrarse reacios a adoptar nuevas plataformas.</li>\r\n  <li><b>Capacitación:</b> es necesario invertir en formación para aprovechar al máximo estas soluciones.</li>\r\n  <li><b>Seguridad de la información:</b> garantizar que los datos estén protegidos en entornos digitales.</li>\r\n</ul>\r\n\r\n<h3>Conclusión</h3>\r\n<p>\r\nLa <b>productividad digital</b> no depende de cuántas herramientas se utilicen, \r\nsino de elegir las adecuadas y aplicarlas estratégicamente en función de las necesidades de cada empresa. \r\nEn un entorno competitivo, aquellas organizaciones que logren integrar con éxito estas tecnologías \r\nestarán mejor preparadas para crecer y adaptarse a los cambios del mercado.\r\n</p>','2025-07-05','4 min','productividad,cloud,software','../assets/img/productividad_tec.jpg'),(8,'Startups tecnológicas: impulsando la transformación digital','Las startups están liderando el cambio digital al introducir soluciones disruptivas. \r\n Su agilidad y capacidad para adaptarse a nuevas tendencias las convierten en actores clave dentro del ecosistema tecnológico.','<h2>Startups tecnológicas: impulsando la transformación digital</h2>\r\n\r\n<p>\r\nLas <b>startups tecnológicas</b> se han convertido en actores clave dentro del ecosistema empresarial moderno. \r\nSu capacidad para innovar con rapidez, adoptar modelos disruptivos y aprovechar las tecnologías emergentes \r\nlas posiciona como catalizadoras de la <b>transformación digital</b> en múltiples sectores.\r\n</p>\r\n\r\n<h3>El papel de las startups en la economía digital</h3>\r\n<p>\r\nA diferencia de las grandes corporaciones, las startups suelen operar con estructuras más ágiles, \r\nlo que les permite adaptarse rápidamente a los cambios del mercado. \r\nMuchas de ellas nacen con un ADN digital, incorporando desde el inicio metodologías \r\ncomo <i>cloud computing, inteligencia artificial, IoT</i> o <i>blockchain</i> para resolver \r\nproblemas de manera innovadora.\r\n</p>\r\n\r\n<h3>Áreas de impacto</h3>\r\n<ul>\r\n  <li><b>Finanzas (Fintech):</b> startups que reinventan los servicios bancarios, pagos digitales y créditos en línea.</li>\r\n  <li><b>Salud (Healthtech):</b> soluciones digitales para mejorar diagnósticos, telemedicina y gestión de pacientes.</li>\r\n  <li><b>Educación (Edtech):</b> plataformas de aprendizaje en línea que democratizan el acceso al conocimiento.</li>\r\n  <li><b>Comercio electrónico:</b> herramientas que optimizan la experiencia de compra y la logística.</li>\r\n  <li><b>Sostenibilidad:</b> startups verdes que utilizan tecnología para reducir el impacto ambiental.</li>\r\n</ul>\r\n\r\n<h3>Ventajas frente a las empresas tradicionales</h3>\r\n<ul>\r\n  <li><b>Agilidad:</b> capacidad de experimentar y pivotar en menos tiempo.</li>\r\n  <li><b>Innovación constante:</b> incorporación rápida de tecnologías emergentes.</li>\r\n  <li><b>Orientación al usuario:</b> modelos centrados en la experiencia del cliente.</li>\r\n  <li><b>Escalabilidad:</b> facilidad para crecer a nivel global con modelos digitales.</li>\r\n</ul>\r\n\r\n<h3>Desafíos que enfrentan</h3>\r\n<p>\r\nA pesar de su potencial, las startups también deben superar obstáculos para consolidarse:\r\n</p>\r\n<ul>\r\n  <li><b>Acceso a financiamiento:</b> depender de inversionistas para escalar.</li>\r\n  <li><b>Competencia:</b> tanto de grandes empresas como de otras startups.</li>\r\n  <li><b>Regulación:</b> enfrentar marcos legales en constante evolución.</li>\r\n  <li><b>Sostenibilidad del modelo:</b> garantizar que el crecimiento sea rentable a largo plazo.</li>\r\n</ul>\r\n\r\n<h3>Conclusión</h3>\r\n<p>\r\nLas <b>startups tecnológicas</b> son más que empresas emergentes: \r\nson verdaderos motores de innovación que impulsan la transformación digital en la economía global. \r\nSu capacidad para <b>romper paradigmas</b> y <b>crear soluciones disruptivas</b> les otorga un papel estratégico en el futuro de los negocios.\r\n</p>','2025-06-25','4 min','startups,innovacion,ai','../assets/img/startup.jpg');
/*!40000 ALTER TABLE `articulos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comentarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `articulo_id` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `comentario` text NOT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `likes` int DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `articulo_id` (`articulo_id`),
  CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`articulo_id`) REFERENCES `articulos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentarios`
--

LOCK TABLES `comentarios` WRITE;
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
INSERT INTO `comentarios` VALUES (1,1,'Ana Torres','Muy interesante, creo que las empresas que no adopten la digitalización pronto quedarán obsoletas.','2025-01-10 20:35:00',7),(2,1,'Luis Martínez','Me gustó cómo se explica que no es solo tecnología, sino un cambio cultural dentro de las organizaciones.','2025-02-18 15:20:00',10),(3,1,'María Gómez','Sin duda, la inteligencia artificial y el IoT serán los pilares de esta transformación.','2025-03-06 01:12:00',4),(4,2,'Carlos Méndez','La nube híbrida es la mejor opción para combinar flexibilidad y seguridad, totalmente de acuerdo.','2025-01-25 17:00:00',6),(5,2,'Laura Jiménez','Me ayudó a comprender por qué muchas empresas migran a este modelo en lugar de solo nube pública o privada.','2025-03-01 22:42:00',9),(6,2,'Pedro Sánchez','Excelente explicación, lo veo como la evolución natural de la infraestructura empresarial.','2025-03-12 14:30:00',3),(7,3,'Andrea López','La parte sobre ataques más sofisticados me pareció muy acertada, cada día son más comunes.','2025-02-10 19:15:00',8),(8,3,'Jorge Castillo','Creo que la ciberseguridad debería ser prioridad número uno en las empresas.','2025-03-01 03:50:00',5),(9,3,'Sofía Hernández','Me encantó cómo se plantean soluciones prácticas, no solo el problema.','2025-03-07 23:05:00',11),(10,4,'Raúl Rivera','Definitivamente la innovación es lo que marca la diferencia entre líderes y rezagados.','2025-01-30 16:40:00',4),(11,4,'Patricia Vargas','Muy claro el enfoque en la importancia de la creatividad y la adaptación.','2025-02-23 00:25:00',7),(12,4,'Fernando Ruiz','Creo que cada empresa debería invertir más en investigación y desarrollo.','2025-03-16 02:55:00',9),(13,5,'Isabel Ortega','Me gustó que se explique que la IA va mucho más allá de los asistentes virtuales.','2025-02-02 18:10:00',12),(14,5,'Gabriel Torres','El potencial en áreas como la salud y la educación es enorme.','2025-03-09 20:33:00',6),(15,5,'Claudia Pérez','Es increíble pensar cómo la IA puede predecir comportamientos y optimizar procesos.','2025-03-20 15:00:00',8),(16,6,'Ricardo Morales','El IoT sin duda está revolucionando la forma en que se gestiona la logística.','2025-01-28 17:45:00',10),(17,6,'Paola Medina','Muy interesante el enfoque en la eficiencia y en el acceso a datos en tiempo real.','2025-02-13 04:05:00',7),(18,6,'Héctor Flores','Creo que aún falta concientizar más sobre la seguridad en dispositivos conectados.','2025-03-08 22:30:00',5),(19,7,'Lucía Fernández','Herramientas como la nube y la automatización realmente ahorran mucho tiempo.','2025-01-15 14:25:00',9),(20,7,'Miguel Castro','Me gustó el enfoque en cómo estas tecnologías impactan en el día a día laboral.','2025-02-06 02:50:00',6),(21,7,'Diana Romero','Creo que la clave está en saber elegir bien las herramientas que cada empresa necesita.','2025-03-10 21:20:00',4),(22,8,'Alberto Navarro','Las startups son un gran ejemplo de cómo la innovación cambia la economía.','2025-01-18 15:40:00',8),(23,8,'Camila Herrera','Me encantó la parte donde se mencionan las áreas de impacto como fintech y edtech.','2025-02-14 17:15:00',10),(24,8,'Esteban Duarte','Sin duda, son el motor de la transformación digital en muchos sectores.','2025-03-12 01:05:00',5);
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacto`
--

DROP TABLE IF EXISTS `contacto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacto` (
  `id` int NOT NULL,
  `nombre_completo` varchar(150) DEFAULT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `correo_numero` varchar(50) DEFAULT NULL,
  `asunto` varchar(20) DEFAULT NULL,
  `comentarios_contacto` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacto`
--

LOCK TABLES `contacto` WRITE;
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galeria`
--

DROP TABLE IF EXISTS `galeria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `galeria` (
  `id` int NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  `imagen1` varchar(50) DEFAULT NULL,
  `imagen2` varchar(50) DEFAULT NULL,
  `imagen3` varchar(50) DEFAULT NULL,
  `imagen4` varchar(50) DEFAULT NULL,
  `imagen5` varchar(50) DEFAULT NULL,
  `imagen6` varchar(50) DEFAULT NULL,
  `imagen7` varchar(50) DEFAULT NULL,
  `imagen8` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galeria`
--

LOCK TABLES `galeria` WRITE;
/*!40000 ALTER TABLE `galeria` DISABLE KEYS */;
/*!40000 ALTER TABLE `galeria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `producto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `imagen` varchar(500) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `precio` varchar(30) DEFAULT NULL,
  `descripcion_modal` text,
  `categoria` varchar(100) DEFAULT NULL,
  `stock` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES (1,'Mouse Inalámbrico Logitech M185','../assets/img/img_Catalogo/mouse_logitech.jpg','Mouse compacto y confiable con conexión inalámbrica USB.','$350 MXN','Mouse inalámbrico con nano receptor USB, alcance de hasta 10 metros y batería de larga duración.','Accesorios tecnológicos',25),(2,'Audífonos Bluetooth Sony WH-CH520','../assets/img/img_Catalogo/audifonos_sony.webp','Audífonos inalámbricos con micrófono integrado.','$1,200 MXN','Hasta 50 horas de autonomía, conexión multipunto y sonido de alta calidad.','Accesorios tecnológicos',15),(3,'Teclado Mecánico Redragon Kumara K552','../assets/img/img_Catalogo/teclado_redragon.jpg','Teclado mecánico retroiluminado compacto.','$1,100 MXN','Switches mecánicos, retroiluminación LED y diseño resistente.','Accesorios tecnológicos',22),(4,'Power Bank Anker 20,000 mAh','../assets/img/img_Catalogo/powerbank_anker.jpg','Cargador portátil con carga rápida.','$950 MXN','Batería externa con puertos USB-A y USB-C.','Accesorios tecnológicos',40),(5,'WebCam Logitech C920 HD Pro','../assets/img/img_Catalogo/webcam_logitech.jpg','Cámara Full HD con micrófono.','$1,600 MXN','Resolución 1080p y enfoque automático.','Accesorios tecnológicos',12),(6,'SSD Externo Samsung T7 1TB','../assets/img/img_Catalogo/ssd_samsung.jpg','Disco portátil de alta velocidad.','$2,900 MXN','Velocidad de transferencia de hasta 1050 MB/s.','Accesorios tecnológicos',18),(7,'Smartwatch Amazfit Bip U Pro','../assets/img/img_Catalogo/smartwatch_amazfit.jpg','Reloj inteligente con GPS.','$1,700 MXN','Monitoreo de salud y hasta 9 días de batería.','Accesorios tecnológicos',25),(8,'Laptop HP 250 G9','../assets/img/img_Catalogo/laptop_hp.webp','Laptop de 15.6 pulgadas con Intel i5.','$12,500 MXN','8GB RAM, SSD 512GB y pantalla Full HD.','Equipos y hardware',8),(9,'Monitor Dell 24 Full HD','../assets/img/img_Catalogo/monitor_dell.jpg','Monitor LED Full HD.','$3,800 MXN','Resolución 1920x1080 y diseño moderno.','Equipos y hardware',12),(10,'PC Dell OptiPlex 3090','../assets/img/img_Catalogo/pc_dell.jpg','Computadora empresarial.','$15,500 MXN','Intel i5, SSD y Windows 11 Pro.','Equipos y hardware',10),(11,'Laptop Lenovo ThinkPad E14','../assets/img/img_Catalogo/laptop_lenovo.webp','Laptop empresarial de 14 pulgadas.','$14,900 MXN','Ryzen 5, 16GB RAM y lector de huellas.','Equipos y hardware',6),(12,'Impresora HP LaserJet Pro M404dn','../assets/img/img_Catalogo/impresora_hp.jpg','Impresora láser para oficina.','$5,200 MXN','Impresión rápida y dúplex automático.','Equipos y hardware',14),(13,'Disco Duro Seagate 2TB','../assets/img/img_Catalogo/hdd_seagate.jpg','Disco duro interno.','$1,300 MXN','Almacenamiento confiable para escritorio.','Equipos y hardware',30),(14,'Monitor LG Ultrawide 29','../assets/img/img_Catalogo/monitor_lg.webp','Monitor panorámico.','$5,600 MXN','Resolución ultrawide ideal para multitarea.','Equipos y hardware',9),(15,'Microsoft Office 365 Personal','../assets/img/img_Catalogo/office365.webp','Licencia anual de Office.','$1,299 MXN/año','Incluye Word, Excel, PowerPoint y OneDrive.','Licencias de software',50),(16,'Windows 11 Pro','../assets/img/img_Catalogo/windows11pro.avif','Licencia oficial de Windows.','$4,200 MXN','Sistema operativo con funciones empresariales.','Licencias de software',30),(17,'Adobe Creative Cloud Fotografía','../assets/img/img_Catalogo/adobe_photography.webp','Photoshop y Lightroom.','$1,800 MXN/año','Plan anual para fotógrafos.','Licencias de software',100),(18,'Kaspersky Internet Security','../assets/img/img_Catalogo/kaspersky.jpg','Antivirus para múltiples dispositivos.','$850 MXN/año','Protección contra malware y ransomware.','Licencias de software',60),(19,'AutoCAD 2025','../assets/img/img_Catalogo/autoCAD.jpg','Software profesional CAD.','$47,000 MXN/año','Diseño 2D y 3D profesional.','Licencias de software',15),(20,'CorelDRAW Graphics Suite 2024','../assets/img/img_Catalogo/coreldraw.jpg','Software de diseño gráfico.','$14,000 MXN','Incluye herramientas de diseño vectorial.','Licencias de software',20),(21,'VMware Workstation Pro 17','../assets/img/img_Catalogo/vmware.avif','Software de virtualización.','$6,500 MXN','Permite ejecutar múltiples sistemas operativos.','Licencias de software',25),(22,'Router TP-Link Archer AX10','../assets/img/img_Catalogo/router_tplink.jpg','Router con WiFi 6.','$2,300 MXN','Velocidad de hasta 1.5 Gbps.','Redes y conectividad',20),(23,'Switch Cisco Business 110 8P','../assets/img/img_Catalogo/switch_cisco.webp','Switch Gigabit.','$1,900 MXN','8 puertos y fácil configuración.','Redes y conectividad',18),(24,'Access Point Ubiquiti UniFi AC Lite','../assets/img/img_Catalogo/ap_ubiquiti.jpg','Punto de acceso empresarial.','$2,200 MXN','WiFi dual band y administración remota.','Redes y conectividad',28),(25,'Cable de Red Cat6 UTP 305m','../assets/img/img_Catalogo/cable_cat6.jpg','Cable para instalación de red.','$3,500 MXN','Compatible con redes Gigabit.','Redes y conectividad',35),(26,'Repetidor WiFi TP-Link RE450','../assets/img/img_Catalogo/repetidor_tplink.jpg','Extensor de señal.','$1,200 MXN','Mejora cobertura inalámbrica.','Redes y conectividad',22),(27,'Firewall Fortinet FortiGate 40F','../assets/img/img_Catalogo/firewall_fortinet.jpg','Seguridad de red empresarial.','$18,000 MXN','Protección avanzada y VPN.','Redes y conectividad',5),(28,'Módem Arris SURFboard SB8200','../assets/img/img_Catalogo/modem_arris.jpg','Módem de alto rendimiento.','$3,100 MXN','Compatible con velocidades Gigabit.','Redes y conectividad',16);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicio_esp`
--

DROP TABLE IF EXISTS `servicio_esp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `servicio_esp` (
  `id_servicio` int NOT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `frase` varchar(255) DEFAULT NULL,
  `hechos` varchar(500) DEFAULT NULL,
  `trabajo` varchar(500) DEFAULT NULL,
  `elegir` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_servicio`),
  CONSTRAINT `servicio_esp_ibfk_1` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicio_esp`
--

LOCK TABLES `servicio_esp` WRITE;
/*!40000 ALTER TABLE `servicio_esp` DISABLE KEYS */;
/*!40000 ALTER TABLE `servicio_esp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicios`
--

DROP TABLE IF EXISTS `servicios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `servicios` (
  `id` int NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicios`
--

LOCK TABLES `servicios` WRITE;
/*!40000 ALTER TABLE `servicios` DISABLE KEYS */;
/*!40000 ALTER TABLE `servicios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'techsolutions_tienda'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-05-11 18:08:42
