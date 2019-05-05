-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2019 at 03:49 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eab`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(100) NOT NULL,
  `title_en` varchar(100) NOT NULL,
  `description_ar` text NOT NULL,
  `description_en` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title_ar`, `title_en`, `description_ar`, `description_en`, `image`) VALUES
(5, 'من نحن', 'Who We Are', 'لدينا خبرة أكثر من 20 عاما ومتخصصون في:\n⦁	الإستشارات.\n⦁	بناء القدرات.\n⦁	الإدارة.\n\nنقدم خدمات الاستشارات وتنمية القدرات والإدارة لمختلف أنواع المنظمات (المنظمات الحكومية والهيئات والمنظمات العامة شبه المستقلة، المنظمات الغير حكومية، والقطاع الخاص)، للمساعدة على تطوير وتحديث هذه المنظمات ونظم وأساليب وأدوات إدارتها، لجعلها قادرة على إستخدام المفاهيم والأساليب والتقنيات الحديثة وتطبقها فعليا.\n\nوإحدى اهتماماتنا الرئيسية هي إصلاح وإعادة هيكلة مؤسسات ونظم الإدارة العامة لتحقيق خصائص الحوكمة، والمساعدة في تحويل مؤسسات الأعمال العامة ومؤسسات قطاع الأعمال للعمل بمفاهيم وأساليب وتقنيات مماثلة لتلك التي يستخدمها قطاع الأعمال الخاص بما في ذلك تخطيط العمل والإستراتيجيات المالية وإستراتيجيات السوق والتوجه نحو العميل عند تقديم الخدمة أو المنتج.', 'We have more than 20 years of experience and specialized in:\n⦁	Consultations.\n⦁	Capacity Building.\n⦁	Management.\n\nWe provide consultancy, capacity building, and management services to various types of organizations (governmental organizations, semi-autonomous governmental entities, NGOs, and private sector), to assist in modernizing these organizations and modernizing their management, to make them able to, and actually, utilise modern concepts, methods, and techniques. \n \nOne of our main interests is the reform and restructuring of the public administration and management to realize the characteristics of good governance,  and assist in transforming public and public business enterprises to work along similar concepts, methods, and techniques of private business including business planning, markets and financial strategies, client oriented services and production.', '/images/uploads/15561463602ece774ff0347dd7345f58022160de1fimage.png'),
(6, 'هدفنا', 'Our Purpose', 'يمكن تلخيص الغرض الحالي لشركة إيــاب على النحو التالي:\nيتمثل الشاغل الرئيسي لشركة إيـاب في العمل كمقدم لأعلي مستوي من المعرفة مع مساعدة عملائنا في تطوير وتحديث منظماتهم وعملياتهم، وخاصة الكيانات العامة والخاصة. والقوة الأساسية لشركة إيـاب هي المساعدة في وتسهيل تبني المفاهيم الحديثة في إطار المحيط الاجتماعي الثقافي والمحيط الاقتصادي المحدد لعملائنا.', 'Our current purpose can be briefly summarized as:\nEAP’s major concern is to act as a state-of-the-art knowledge provider while assisting our clients in developing and modernising their processes and organisations, particularly for public and private entities. It is a core strength of EAP to assist and facilitate the adaptation of modern concepts in our clients specific socio-cultural and economic settings.', '/images/uploads/15561463602ece774ff0347dd7345f58022160de1fimage.png'),
(7, 'رؤيتنا', 'Our Vision', 'ترتكز رؤيتنا على اعتبار أن المنظمات ومواردها البشرية لا يمكنها أن تؤدي وتنفذ بنجاح إلا عندما تمارس عملية تعلم مستمرة (تنظيمية وفردية) لتعمل وتتطور في بيئة متغيرة باستمرار. ويعد التعلم المستمر شرطًا أساسيًا لقدرة المؤسسة على تطبيق المفاهيم والأدوات والتقنيات المبتكرة.\nونحن نهدف إلى إعداد وتسهيل هذه العمليات بشكل مشترك وفي شراكة وثيقة مع عملائنا.\n\nبالنسبة إلى شركة إيـاب، فإن الأمر يتعلق بضرورة أن يتبع تنظيمها ومواردها البشرية والخبراء المنتسبين لها عملية تعلم مستمر وموجه ذاتيا لضمان تقديم خدمات استشارية حديثة ومبتكرة وموجهة نحو العميل.', 'Our vision is based on the consideration that organisations and their people can only successful operate and perform when they practise an ongoing (organisational and individual) learning process to act and evolve in a constantly changing environment.\nConstant learning is a crucial requisite for an organisation’s capability to apply innovative concepts, tools and techniques.\nWe aim to set up and facilitate these processes jointly and in close partnership with our clients.\nFor EAP, it is a matter of fact that its organisation, all staff members and affiliated experts need to follow a self-directed ongoing learning process to ensure state-of-the-art, innovative and client-oriented consultancy services.', '/images/uploads/15561463602ece774ff0347dd7345f58022160de1fimage.png'),
(8, 'مبادئ أعمالنا', 'Our Business Principles', 'مبادئ العمل هي معتقدات والتزامات شركة إيـاب، وهي تمثل ما تؤيده وتدعمه وتلتزم به الشركة والكيفية التي يتم بها تقديم جميع خدماتها، وتحدد ثقافتنا، وتوجه سلوك مواردها البشرية والخبراء المنتسبين لها وقرارات الشركة. وهذه المبادئ', 'The business principles present EAP’s beliefs and commitments. They present, what EAP stands for, how all services are provided, determines our culture, guiding employee’s and associated expert’s behaviour and company decisions.', '/images/uploads/15561463602ece774ff0347dd7345f58022160de1fimage.png'),
(9, 'فريق الإدارة لدينا', 'Our Management Team', ' : حسام محسن (فريق الإدارة – الشئون الفنية): أكثر من 20 عامًا من الخبرة <br>\r\nإستشاري تطوير مؤسسي وتنظيمي وإدارة وتنمية موارد بشرية في العديد من مشروعات المساعدة الفنية التي تمولها مختلف الوكالات المانحة ⦁<br>\r\n (the Netherlands TA, EU, KfW, World Bank, GTZ/GIZ, USAID, DANIDA, FINIDA)<br>\r\n .والوزارات المصرية لصالح مختلف المنظمات الحكومية وشبه الحكومية وغير الحكومية المصرية والعربية والقطاع الخاص<br>\r\n.نائب المدير العام، مدير الموارد البشرية، ومنسق المشروعات في شركة إياب للاستشارات والتدريب، مصر ⦁<br><br>\r\n\r\n : أوليفر سباتجينز (فريق الإدارة - الشئون الفنية): أكثر من 20 عامًا من الخبرة<br>\r\n.خبير مؤسسي وفي تنمية الموارد البشرية والتنمية المستدامة في العديد من مشروعات المساعدة الفنية في أوروبا وأفريقيا ⦁ <br>\r\n.المدير التنفيذي ورئيس فريق مشروعين في منغوليا ومصر ⦁<br>\r\n.رئيس قسم دراسات التسويق Fontys Hogescholen Venlo  في هولندا. ⦁<br>\r\n.محاضر مستقل RAM STREAM Management-Seminare in Siegen and in Lad Nordhausen  في ألمانيا. ⦁<br><br>\r\n\r\n\r\n\r\n : (محمد إسماعيل (فريق الإدارة – الشئون الإدارية والمالية<br>\r\n : أكثر من 15 عامًا من الخبرة في شركة إياب للاستشارات والتدريب، مصر<br>\r\n.منسق مشروعات: تخطيط أنشطة/ مهام المشروعات، التنسيق بين الخبراء والاستشاريين، متابعة تنفيذ الخطط التشغيلية للمشروعات والمهام ⦁<br>\r\n.نائب مدير عام الشؤون الإدارية والمالية والموارد البشرية. ⦁', 'Hosam Mohsen (Management Team- Technical): More than 20 years of experience as:<br>\r\n⦁Institutional and organisational development and HRM and development consultant in several TA projects financed by different donor agencies (the Netherlands TA, EU, KfW, World Bank, GTZ/GIZ, USAID, DANIDA, FINIDA) and Egyptian ministries for the benefit of various Egyptian and Arab governmental, semi-governmental and non-governmental organizations and private sector.<br>\r\n⦁Deputy general manager, human resources manager, and projects’ coordinator for EAP for Consultancy and Training, Egypt.<br><br>\r\n\r\nOliver Spätgens (Management Team- Technical): More than 20 years of experience as:<br>\r\n⦁Institutional, human resources development, and sustainable development expert in several TA projects in Europe and Africa.<br>\r\n⦁Executive director and team leader of two projects in Mongolia and Egypt.<br>\r\n⦁Head of Department Marketing Studies, Fontys Hogescholen Venlo in the Netherlands.<br>\r\n⦁Freelance lecturer in RAM STREAM Management-Seminare in Siegen and in Lad Nordhausen in Germany. <br><br>\r\n\r\nMohamed Ismail (Management Team Administrative & Financial): <br>\r\nMore than 15 years of experience for EAP for Consultancy and Training, Egypt as: <br>\r\n⦁Projects’ Coordinator: Planning projects’/assignments’ activities, coordinating among consultants and experts, and monitoring the <br>implementation of projects’/assignments’ plans of operations.<br>\r\n⦁Administrative, financial and human resources deputy general manager.', '/images/uploads/15561463602ece774ff0347dd7345f58022160de1fimage.png');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(100) NOT NULL,
  `name_en` varchar(100) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name_ar`, `name_en`, `type_id`) VALUES
(1, 'الوكالة الألمانية للتعاون الفني', 'German Agency for International Cooperation (GIZ).', 1),
(2, 'البنك الألماني لإعادة التعمير', 'German Bank for Reconstruction (KfW).', 1),
(3, 'المعونة الفنية الأمريكية', 'United States Agency for International Development. ', 1),
(4, 'المعونة الفنية الهولندية', 'Netherlands Technical Assistance.', 1),
(5, 'المعونة الفنية الدنماركية', 'Danish Technical Assistance (DANIDA).', 1),
(6, 'المعونة الفنية الفنلندية', 'Finish Technical Assistance (FINIDA).', 1),
(7, 'الإتحاد الأوروبي', 'European Union (EU).', 1),
(8, 'البنك الدولي', 'World Bank (WB).', 1),
(9, 'الهيئة العامة للصرف الصحي بالاسكندرية (AGOSD) - مصر', 'Alexandria General Organization for Sanitary Drainage (AGOSD), Egypt.', 2),
(10, 'الهيئة العامة لمياه الشرب بالاسكندرية (AWGA) - مصر', 'Alexandria Water General Authority (AWGA), Egypt.', 2),
(11, 'معهد بحوث الصرف - المركز القومي لبحوث المياه - وزارة الأشغال العامة والموارد المائية-مصر', 'Drainage Research Institute (DRI), National Water Research Centre, Ministry of Public Works and Wate', 2),
(12, 'مديرية الصحة بالفيوم - محافظة الفيوم - مصر', 'Fayoum Health Directorate, Fayoum Governorate, Egypt.', 2),
(13, 'المعهد الفني للتمريض - جامعة القاهرة - مصر', 'Technical Institute of Nursing, Cairo University, Egypt.', 2),
(14, 'قطاع التخطيط - وزارة الأشغال العامة والموارد المائية - مصر', 'Planning Sector, Ministry of Public Works and Water Resources (MPWWR), Egypt.', 2),
(15, 'شركة كفر الشيخ لمياه الشرب والصرف الصحي - مصر', 'Kafr El-Sheikh Water and Sewage Company (KWSC), Egypt.', 2),
(16, 'الهيئة العامة الاقتصادية لمياه الشرب والصرف الصحي بالفيوم  - مصر', 'Fayoum Economic General Authority for Water and Sanitation (FEGAWS), Egypt.', 2),
(17, 'الهيئة العامة الاقتصادية لمياه الشرب والصرف الصحي بأسوان  - مصر', 'Aswan Economic General Authority for Water and Sanitation, Egypt.', 2),
(18, 'قطاع المياه الجوفية - وزارة الموارد المائية والري - مصر', 'Ground Water Sector, Ministry of Water Resources and Irrigation (MWRI), Egypt.', 2),
(19, 'الجهات التابعة لوزارة الموارد المائية والري في محافظة الفيوم - مصر', 'Government of Egypt organizations affiliated to Ministry of Water Resources and Irrigation (MWRI) in', 2),
(20, 'الهيئة العامة للكهرباء والمياه في المناطق الريفية - وزارة الكهرباء والمياه - اليمن', 'General Authority for Rural Electricity and Water (GAREW), Ministry of Electricity and Water, Yemen.', 2),
(21, 'وزارة الصناعة والتجارة - اليمن', 'Ministry of Industry and Trade, Yemen', 2),
(22, 'مديرية الزراعة بالفيوم - مصر', 'Fayoum Agricultural Directorate, Egypt.', 2),
(23, 'جهاز شئون البيئة المصرية - مصر', 'Egyptian Environmental Affairs Agency (EEAA), Egypt', 2),
(24, 'شركة بلينا لتصنيع الطوب الرملي – مصر', 'PLENA EGYPT Company for manufacturing light sandy bricks, Egypt.', 2),
(25, 'قطاع المياه الجوفية - وزارة الموارد المائية والري - مصر', 'Central Administrations for Seeds Certification and Seeds Production, Ministry of Agriculture, Egypt', 2),
(26, 'الإدارة المركزية لإنتاج البذور - وزارة الزراعة - مصر.', 'General Organization for Physical Planning (GOPP), Ministry of Housing, Egypt.', 2),
(27, 'الهيئة العامة للتخطيط العمراني - وزارة الإسكان - مصر.', 'Central Department for Technical Support and Projects, Ministry of Health and Population, Egypt.', 2),
(28, 'الإدارة المركزية للدعم الفني والمشروعات - وزارة الصحة والسكان - مصر.', 'Ministry of Sate for Administrative Development (MSAD), Egypt.', 2),
(29, 'الهيئة العامة للتأمين الصحي – وزارة الصخة – مصر. ', 'Health Insurance Organization (HIO), Ministry of Health, Egypt.', 2),
(30, 'محافظات القاهرة ، أسوان ، الفيوم ، قنا ، مطروح وشمال سيناء - مصر.', 'Cairo, Aswan, Fayoum, Qena, Matrouh and North Sinai Governorates, Egypt.', 2),
(31, 'وزارات الموارد المائية والري، الزراعة واستصلاح الأراضي، الصحة والسكان، الإسكان ، التخطيط والتنمية ال', 'Ministries of Water Resources and Irrigation, Agriculture and Land Reclamation, Health and Populatio', 2);

-- --------------------------------------------------------

--
-- Table structure for table `consultances`
--

CREATE TABLE `consultances` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(100) NOT NULL,
  `title_en` varchar(100) NOT NULL,
  `description_ar` text NOT NULL,
  `description_en` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `consultances`
--

INSERT INTO `consultances` (`id`, `title_ar`, `title_en`, `description_ar`, `description_en`, `image`) VALUES
(1, 'النهج الاستشاري الشامل', 'Overall Consultancy Approach', 'يتمثل جوهر منهجيتنا في تقديم الإستشارات في توليد ميزة تنافسية بالمعرفة. لذلك، وبالتعاون الوثيق مع عملاءنا، تعمل شركة إيـاب\n\n⦁	كمولد أفكار لتحقيق تميز ابتكاري وعملي،\n⦁	كمدمج لتحقيق التكامل بين جميع الكفاءات والمستويات التنظيمية اللازمة للنجاح،\n⦁	كمشارك في عملية التحول لتمكين وتحقيق التغيير والتطور المستهدف لعميلنا.\n\nالتعاون\nالتعاون المستمر مع عملائنا هو السمة الرئيسية لخدماتنا الاستشارية. فبالاشتراك مع العميل، سنتمكن من التعرف على وتحليل الظروف والوضع الحالي وتحديد النواحي الحرجة التي يجب معالجتها بمفاهيم وأدوات جديدة ومبتكرة. وتتم عملية تحديد واختيار النواحي الحرجة واتخاذ قرارات محددة وملائمة لمعالجتها وتطويرها بصورة تشاركية. في هذه المرحلة، نسعي إلي مشاركة مستويات تنظيمية وموارد بشرية محددة من جهة العميل بما سيدعم بشكل كبير تدابير التنفيذ التالية.\n\nتعتمد منهجيتنا في تقديم الاستشارات على تعاون مكثف ومناسب ومخطط مع العميل. سوف تؤدي التدخلات القائمة على الشراكات، والتي تعتمد على الفريق، والموجهة دائما نحو النتائج، إلى حلول مقبولة من العميل وإلي التنفيذ والتشغيل السلس.\n\nالتضمين\nستتماشى دائمًا مفاهيمنا وحلولنا المقترحة مع متطلبات عملائنا ودائما ما ستكون موجهة نحو التطبيق والممارسة. تسعي شركة إيـاب دائما الي تحقيق النتائج، مما يخلق فائدة مستدامة. هذا هو السبب في أننا سوف نرافق عملائنا من مرحلة وضع المفهوم إلي مرحلة تطوير العمليات والأنظمة.\n\nالاستدامة\nستضمن إجراءات تطوير القدرات المصممة خصيصًا أن يفهم جميع موظفي العميل بسرعة المفاهيم الجديدة وأن يتقنوا العمليات والإجراءات المطورة.', 'The core of our consultancy approach is to generate a competitive advantage by knowledge. Therefore, in close cooperation with or clients, EAP will act\n 	as a pulse generator for innovative and operative excellence, \n 	as an integrator of all necessary competences and hierarchies for success and\n 	as a transformer while enabling to change and to accompany in realisation.\n\n \nCOOPERATION\nContinuous cooperation with our client is a main characteristic of our consultancy service. Jointly with the client, we will access and analyses the circumstances and current situation and identify crucial areas to be addressed with new, innovative concepts and tools. Selection and decisions for specific, context-adequate will be taken participatory. At this stage, the inclusion of tangent hierarchical levels and staff shall be envisaged. This will significantly support following implementation measures.\nOur consultancy approach is based on an intensive, fairly cooperation with the client. Partner-like, team-based and every time result-oriented interactions will lead to smooth functioning and by client acceptable solutions.\nEMBEDMENT\nOur proposed concepts and solutions will be always aligned with the requirements of our clients and are geared to practise. EAP stands for results, which create a sustainable benefit. That is why we will accompany our clients from conceptualising to anchoring within processes and systems. \n\nSUSTAINABILITY\nTailor-made capacity development measures will ensure that all staff members of the client will quickly understand new concepts and master changed processes and procedures.', '/images/uploads/1556122533977cabee5d917dc58e6b5e2104dba513image.png'),
(2, 'دعم القدرات وتحسين الأداء', 'Capacity Support  and Performance Improvement', 'إن أحد الاهتمامات الرئيسية لشركة إيـاب يتمثل في المساعدة على تطوير وتحديث الأنواع المختلفة من المنظمات والنظم والأساليب والأدوات التي تدار بها، لجعل هذه المنظمات قادرة على الاستفادة من المفاهيم والأساليب والتقنيات الحديثة. \n\nالمنظمات الحديثة هي التي تستكشف بإستمرار طرق جديدة لإستخدام الموارد وتحسين جودة المنتجات أو الخدمات وزيادة الكفاءة والفعالية والاستجابة لإحتياجات العملاء. وتتميز المنظمات الحديثة بأنها ديناميكية ومرنة ومبتكرة ورائدة وتركز على المهارات ولديها مسؤولية إجتماعية، بالإضافة إلى سعيها المستمر إلى التعلم والتحسين وتلبية احتياجات العملاء.\n\nوتحتاج هذه المنظمات الحديثة إلى نمط إداري حديث. وتشمل مميزات الإدارة الحديثة تكوين فرق متخصصة وتحقيق التشبيك والتنسيق فيما بينها، وتشجيع الأداء الجماعي، وتطوير الكفاءات الأساسية والمهنية للموارد البشرية، وزيادة استقلالية الموظفين والإستقلالية في صنع القرار، وتحفيز الابتكار والإبداع، والاستثمار في المعرفة وتنمية التعلم، والدعوة إلى إستخدام نظم وتقنيات المعلومات الحديثه، وضمان الجودة، وخلق بيئة إيجابية، والتفكير الاستراتيجي، والاستجابة للبيئة المتغيرة، والمسؤولية تجاه العملاء.\n\nولذلك تركز شركة إيــــاب للإستشارات والتدريب على \"دعم قدرات\" و \"تحسين أداء\" مختلف أشكال المنظمات.', 'One of EAP‘s major concerns is to assist in developing and modernizing various types of organizations and their management, to make these organizations able to, and actually, utilise modern concepts, methods, and techniques. \n \nModern organizations are those continuously exploring new ways of using resources, improving quality of products or services, increasing efficiency and effectiveness, and responding to customers needs. Modern organizations are characterised by being dynamic, flexible, innovative, entrepreneurial, skill focused, and socially responsible, in addition to being continuously seeking learning, improvement, and satisfying customers’ needs.\n\nThese modern organizations require modern style of management.	Modern management features include creating specialised teams and performing networking and coordination among them, encouraging collective performance, developing key and professional competencies of human resources, stimulating innovation and creativity, investing in knowledge and learning development, advocating the use of new information systems and technologies, performing quality assurance, thinking forward and strategically, responding to the changing environment, and being responsible towards customers.\n\nTherefore, EAP focuses on “Capacity Support” and “Performance Improvement” of organizations.', '/images/uploads/1556122533977cabee5d917dc58e6b5e2104dba513image.png');

-- --------------------------------------------------------

--
-- Table structure for table `descriptions`
--

CREATE TABLE `descriptions` (
  `id` int(11) NOT NULL,
  `page` enum('ABOUTUS','CLIENTS','CONSULTANCY','EXPERTISES','MANAGMENT','NEWS','PROJECTS','SERVICES','WORK') NOT NULL,
  `title_ar` varchar(100) NOT NULL,
  `title_en` varchar(100) NOT NULL,
  `description_ar` text NOT NULL,
  `description_en` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `descriptions`
--

INSERT INTO `descriptions` (`id`, `page`, `title_ar`, `title_en`, `description_ar`, `description_en`, `image`) VALUES
(2, 'ABOUTUS', 'إيـاب للاستشارات والتدريب', 'EAP for Consultancy and Training', 'هي شركة مصرية تأسست عام 1994، وقدمت خدمات استشارية وتدريبية لمجموعة واسعة من المستفيدين في مصر وفي بعض الدول العربية. وكان نشاطها الأساسي يعتمد على تنفيذ المشروعات الممولة من قبل الجهات المانحة الدولية. وفي عام 2018، بدأت عملية إعادة تشكيل وتنظيم شركة إيـاب وتم الانتهاء منها. وكجزء من إعادة التنظيم، تم تغيير الشكل القانوني للشركة إلى شركة مساهمة لتوفير فرص للمستثمرين وللتأهب لتوسيع شبكة أعمالها محليا وإقليمياً ودولياً. وتضمنت عملية إعادة تنظيم شركة إيـاب أن تكون شركة حديثة وموجهة نحو المشروعات، وعلى استعداد للتعامل والتكيف مع ظروف السوق المتغيرة.', 'Is a 1994 established Egyptian company, which provided consultancy and training services for a wide range of Egyptian beneficiaries. Its core business was mainly based on international donor-funded project implementation. In 2018, a re-shaping of EAP was initiated and is meanwhile finalised. As a part of the re-organisation, the legal status changed towards a new registration as a stock-based company to provide opportunities for investors and to be prepared for expanding its business network regionally and international. EAP used the re-organisation to set up a modern and project-oriented company, ready to cope with changing market conditions and to adapt to changing market conditions.', '/images/uploads/15561209672aff67353f1a7258b31ff1c35039bc36image.png'),
(3, 'WORK', 'الخبرة,والخدمات والمشروعات', 'Expertise, Services and Projects', 'خبراء مؤهلين وخبرة طويلة في القطاع الحكومي، بالإضافة إلي القطاعين الخاص والأهلي. \n\nوقد أسهمنا في تخطيط وتنفيذ ومتابعة وتقييم العديد من المشروعات في مختلف القطاعات مثل الزراعة والري، مياه الشرب والصرف الصحي، التعليم، التعليم الفني والمهني، الصحة والسكان، وأخري. \n\nكما تغطي خدماتنا العديد من المجالات مثل التطوير المؤسسي والتنظيمي، إدارة وتقييم المشروعات، الإدارة والتخطيط الاستراتيجيي، تنمية السياسات، التنمية الحضرية والريفية، إدارة وتنمية الموارد البشرية، التحليل الاجتماعي-الإقتصادي والمالي، تطوير قواعد البيانات ونظم المعلومات الإدارية ونظم المعلومات الجغرافية.', 'High-qualified experts and a long experience in the public sector, in addition to the private and non-governmental sectors. \n\nWe contributed in the planning, implementation, and monitoring and evaluation of several projects in various sectors such as agriculture and irrigation, drinking water and sanitation, education, technical and vocational education, health and population and others.\n\nOur services cover many areas such as institutional and organizational development, project management and evaluation, strategic management and planning, policy development, urban and rural development, human resources management and development, socio-economic and financial analysis, database development, management information systems and geographic information systems.', '/images/uploads/1556121205ae58b3acb799ca5e925ec7ad186581d7image.png'),
(4, 'CONSULTANCY', 'منهجيتنا في تقديم الإستشارات', 'OUR CONSULTANCY APPROACH', 'تتبع منهجيتنا في تقديم الاستشارات منظور متكامل وشامل. نحن نتفادي أن تكون الاستشارات التي نقدمها محدودة في إجراء تعديلات انتقائية أو إجراءات فردية، فنحن على وعي كامل بأن المنظور والفهم الشاملين هما فقط ما سيؤديان إلى حلول مستدامة لمصلحة عملائنا.', 'Our approach for providing consultancy follows an integrated and holistic perspective. We refrain from limiting our consultancy to selective adjustments or single measures quite aware, that only a holistic perspective and understanding will lead to sustainable solutions for the best of our clients.', '/images/uploads/1556121731b69e0dc33ee1548805bf30d4c585ad02image.png'),
(5, 'MANAGMENT', 'إدارة الجودة', 'QUALITY MANAGMENT', 'تطبق شركة إيـاب نظام لإدارة الجودة سواء في عمل الشركة الداخلي للحفاظ علي المستوي المطلوب من التميز، أو للبرامج والمشروعات التي تنفذها للتأكد من أن البرامج والمشروعات تحقق أهدافها', 'EAP applies a quality management system for both the internal work of the company to maintain the required level of excellence, and for the programs and projects it executes to ensure that the programs and projects achieve their objectives', '/images/uploads/155612237321d6b9a0f6f439ec2872b608aa3a56ccimage.png'),
(6, 'CLIENTS', 'العملاء والشركاء', 'CLIENTS & PARTNERS', 'تعاونت شركة إيـاب مع مختلف وكالات الدعم الفني والمالي، وقدمت خدماتها إلى مختلف المنظمات المستفيدة بما في ذلك المؤسسات الحكومية، والمؤسسات شبه المستقلة، والمنظمات غير الحكومية، والشركات الخاصة.', 'EAP has cooperated with various technical assistance and financing agencies, and has extended its services to various beneficiary organizations including governmental institutions, semiindependent public authorities and organisations, non-governmental organizations, and private firms.', '/images/uploads/1556122533977cabee5d917dc58e6b5e2104dba513image.png'),
(7, 'NEWS', 'الأخبار والمنشورات', 'NEWS & PUBLICATIONS', 'Information and illustrations to be inserted', 'Information and illustrations to be inserted', '/images/uploads/15561226237f4612bc3f86a9dc1a991b05f8344b52image.png'),
(8, 'PROJECTS', 'مشاريعنا', 'Our Projects', 'أسهمنا في تخطيط وتنفيذ ومتابعة وتقييم العديد من المشروعات في مختلف القطاعات مثل الزراعة والري، مياه الشرب والصرف الصحي، التعليم، التعليم الفني والمهني، الصحة والسكان، وأخري.', 'We contributed in the planning, implementation, and monitoring and evaluation of several projects in various sectors such as agriculture and irrigation, drinking water and sanitation, education, technical and vocational education, health and population and others.', '/images/uploads/15561480073ba9c273761e3691edf66c3f50eb135fimage.png'),
(9, 'SERVICES', 'خدماتنا', 'Our Services', 'تغطي خدماتنا العديد من المجالات مثل التطوير المؤسسي والتنظيمي، إدارة وتقييم المشروعات، الإدارة والتخطيط الاستراتيجيي، تنمية السياسات، التنمية الحضرية والريفية، إدارة وتنمية الموارد البشرية، التحليل الاجتماعي-الإقتصادي والمالي، تطوير قواعد البيانات ونظم المعلومات الإدارية ونظم المعلومات الجغرافية.', 'Our services cover many areas such as institutional and organizational development, project management and evaluation, strategic management and planning, policy development, urban and rural development, human resources management and development, socio-economic and financial analysis, database development, management information systems and geographic information systems.', '/images/uploads/1556148019a610f10cecd48967a3bfd941ef0ddfccimage.png'),
(10, 'EXPERTISES', 'خبرتنا', 'Our Expertise', 'لدينا خبرة أكثر من 20 عاما في تنمية وتطوير القطاع الحكومي، بالإضافة إلي القطاعين الخاص والأهلي.', 'We have more than 20 years of experience in developing the public sector, in addition to the private and non-governmental sectors.', '/images/uploads/15561479925392ebdab37cd5e9276b9da1df460492image.png');

-- --------------------------------------------------------

--
-- Table structure for table `expertises`
--

CREATE TABLE `expertises` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(100) NOT NULL,
  `title_en` varchar(100) NOT NULL,
  `description_ar` text NOT NULL,
  `description_en` text NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expertises`
--

INSERT INTO `expertises` (`id`, `title_ar`, `title_en`, `description_ar`, `description_en`, `icon`) VALUES
(1, 'القطاع العام', 'Public Sector', 'later', 'later', '/images/uploads/1555760321a20c12cd4fa0825a7b01a4b83b04d97bimage.png'),
(2, 'القطاع الخاص', 'Private Sector', 'later', 'later', '/images/uploads/1555760426499f3dbd5fe915e279128742a24ab37fimage.png'),
(3, 'القطاع غير الحكومي', 'Non-Governmental Sector', 'later', 'later', '/images/uploads/1555760492b598b79fafd0347b6d1dee027b53af1bimage.png');

-- --------------------------------------------------------

--
-- Table structure for table `managments`
--

CREATE TABLE `managments` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(100) NOT NULL,
  `title_en` varchar(100) NOT NULL,
  `description_ar` text NOT NULL,
  `description_en` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `managments`
--

INSERT INTO `managments` (`id`, `title_ar`, `title_en`, `description_ar`, `description_en`, `image`) VALUES
(1, 'إدارة الجودة الشاملة', 'Overall Quality Management', 'يعتمد نظام إدارة الجودة في شركة إيـاب على معايير \"ISO9000:2015\"، وتشكل المفهوم الأساسي لجميع مجالات أعمالنا وأنشطتنا. تعني إدارة الجودة أن شركة إيـاب تسعى جاهدة نحو التحسين المستمر.\n\nيوفر نظام إدارة الجودة إرشادات لتوضيح قدرتنا على تقديم خدمات استشارية تلبي دائما احتياجات العملاء والمتطلبات القانونية والتنظيمية السارية.\n\nإن التنفيذ التشغيلي لمبادئ إدارة الجودة سيضمن تعزيز رضا العملاء من خلال زيادة الفعالية الداخلية للشركة، وتحسين عملية التطور المستمر، ويؤدي في النهاية إلى ضمان المطابقة مع متطلبات وتوقعات العملاء.\n\n\nمبادئ الجودة لدينا\n\nالتركيز على العميل\nفي تعاوننا مع العملاء، ستقوم شركة إيـاب، وبحساسية عالية، بمعرفة وفهم احتياجات عملائنا الحاليين والمستقبليين. وفي كل مرة سنركز على متطلبات العميل، وقياس مدى الرضا عن خدماتنا، وإدارة العلاقة مع العميل بسلاسة. تستهدف شركة إيـاب تجاوز توقعات العميل.\n\nالقيادة\nأكملت شركة إيـاب عملية إعادة تشكيلها، وأسست رؤيتها الجديدة، وحددت اتجاهاتها الجديدة. أهدافنا نحو التطور طموحة وشبكتنا آخذة في النمو. سيتم إيلاء اهتمام خاص لمواردنا البشرية والخبراء المنتسبين لنا، لضمان أنهم قادرون ومجهزون للأداء بالجودة المتوقعة. نحن ندرك جيدًا أن الجودة في تقديم الخدمة تعتمد بشكل أساسي على مواردنا البشرية والخبراء المنتسبين لنا.\n\nاشراك الموارد البشرية\nتقر شركة إيـاب بأهمية تنشيط القدرات الفردية للأشخاص وتقديرها، داخل الشركة ولدي عملائنا.\nنحن نتيح المشاركة في التحسين المستمر، وتعزيز التعلم المستمر، وتبادل المعرفة، ومناقشة مفتوحة للمشكلات والقيود.\n\nتعمل شركة إيـاب على جعل مواردها البشرية والخبراء المنتسبين لها مسؤولين عن مساهماتهم وتقييم الكفاءات الفردية لهم لمزيد من التطوير.', 'The quality management system of EAP is build on the ISO 9000: 2015 standards and forms the core concept for all our business areas and activities. Quality management means for EAP to strive after continuous improvement.\nThe quality management system provides guidance for demonstrating our ability to provide consistently consultancy services that meet clients and applicable statutory and regulatory requirements.\nThe operational implementation of quality management principles will guarantee the enhancement of client satisfaction through increased internal effectiveness, improved process for continuous improvement and finally result in assurance of conformity to clients demands and expectations.\n\nOUR QUALITY PRINCIPLES\nClient Focus\nIn our cooperation with clients EAP will with high sensitivity learn and understand the needs of our existing and future clients. Every time EAP focus on the client’s requirements, measure the satisfaction with EAP’s service and manage smoothly the relationship with the client. EAP aims to exceed client’s expectations.\n\nLeadership\nEAP has completed its re-shaping process, established its new vision and defined its new directions. Our development goals are ambitious and our network is growing. Special attention will be given to our employees and associated experts, ensuring that they are empowered and equipped to perform in expected quality. We are well aware, that quality in service provision majorly depends on our employees and associated experts. \n\nEngagement of People\nEAP acknowledges the importance to activate and value people’s individual abilities, inside EAP and in our clients’ organisation.\nWe enable the participation in continual improvement, promote ongoing learning and knowledge sharing and an open discussion of problems and constrains.\nEAP is making its employees and associated accountable for their contribution and evaluate individual competences for further develop those people.', '/images/uploads/1556122533977cabee5d917dc58e6b5e2104dba513image.png'),
(2, 'إدارة جودة البرنامج/ المشروع', 'programme/ project quality management', 'إن إدارة جودة البرنامج/ المشروع هي عملية تحديد الجودة المتوقعة في بداية البرنامج، ثم الحفاظ على تلك الجودة طوال تنفيذ البرنامج حتى الانتهاء منه.\n\nتنفذ شركة إيـاب عملية إدارة الجودة طوال دورة حياة كل برنامج/ مشروع', 'A programme/ project quality management is the process of establishing expected quality at the start of the program, and then maintaining that quality throughout the program implementation till its completion. \n\nEAP performs quality management (QM) throughout the lifecycle of each programme/ project.', '/images/uploads/1556122533977cabee5d917dc58e6b5e2104dba513image.png');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(100) NOT NULL,
  `title_en` varchar(100) NOT NULL,
  `description_ar` text NOT NULL,
  `description_en` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(100) NOT NULL,
  `title_en` varchar(100) NOT NULL,
  `description_ar` text NOT NULL,
  `description_en` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(100) NOT NULL,
  `title_en` varchar(100) NOT NULL,
  `description_ar` text NOT NULL,
  `description_en` text NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title_ar`, `title_en`, `description_ar`, `description_en`, `icon`) VALUES
(1, 'later', 'Institutional, Organizational, and Systems Development - Public Sector', 'later', 'later', '/images/uploads/155576186485b3e2043b00e2644e2e4a385ecae2e3image.png'),
(2, 'later', 'Institutional, Organizational, and Systems Development - Private Sector', 'later', 'later', '/images/uploads/155576186485b3e2043b00e2644e2e4a385ecae2e3image.png'),
(3, 'later', 'Capacity Building and Awareness', 'later', 'later', '/images/uploads/155576186485b3e2043b00e2644e2e4a385ecae2e3image.png'),
(4, 'later', 'NGOs related', 'later', 'later', '/images/uploads/155576186485b3e2043b00e2644e2e4a385ecae2e3image.png'),
(5, 'later', 'Participatory Development / Local Urban and Rural Development', 'later', 'later', '/images/uploads/155576186485b3e2043b00e2644e2e4a385ecae2e3image.png'),
(6, 'later', 'Others (sector specific, strategies and policies related, etc.)', 'later', 'later', '/images/uploads/155576186485b3e2043b00e2644e2e4a385ecae2e3image.png');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(100) NOT NULL,
  `title_en` varchar(100) NOT NULL,
  `description_ar` text NOT NULL,
  `description_en` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`id`, `title_ar`, `title_en`, `description_ar`, `description_en`, `image`, `created_at`) VALUES
(1, 'hh', 'hh', 'hh', 'h', '/images/uploads/15555036242890c23bf3eed9301150ca97bf8e3e71image.png', '2019-04-17 12:20:24');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(100) NOT NULL,
  `title_en` varchar(100) NOT NULL,
  `description_ar` text NOT NULL,
  `description_en` text NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title_ar`, `title_en`, `description_ar`, `description_en`, `icon`) VALUES
(1, 'إدارة المشروعات', 'PROJECTS MANAGEMENT', 'later', 'later', '/images/uploads/15557605506d920c8feba43b750ad8954fb7d780a5image.png'),
(2, 'إدارة استراتيجية', 'STRATEGIC MANAGEMENT AND PLANNING', 'later', 'later', '/images/uploads/15557606103769fdf54082ced5504e7c851c06e424image.png'),
(3, 'التطوير المؤسسي', 'INSTITUTIONAL DEVELOPMENT', 'later', 'later', '/images/uploads/155576075062e21c29911649d4ecba74f35140c49dimage.png'),
(4, 'أدارة وتنمية الموارد البشرية', 'HUMAN RESOURCES MANAGEMENT AND DEVELOPMENT', 'later', 'later', '/images/uploads/1555760846e3d8f2c8682a93fef2b3b249945beb56image.png'),
(5, 'التحليل الأقتصادي والمالي', 'ECONOMIC AND FINANCIAL ANALYSIS', 'later', 'later', '/images/uploads/1555761136e831024187a719b5cffb1154a3562fa0image.png'),
(6, 'التحليل الأجتماعي والأقتصادي وأثر المشروعات', 'Socio-economic analysis and impacts of projects', 'later', 'later', '/images/uploads/155576128128648cd876c8777c11d183e2aeda9743image.png'),
(8, 'بنوك البيانات وأنظمة أدارة المعلومات وأنظمة المعلومات الجغرافية', 'Data Banks, Management Information Systems, and Geographic Information SystemS', 'later', 'later', '/images/uploads/1555761475b3fe621c3af64c6890c8e4bcc64f2df2image.png');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `logo_ar` varchar(255) NOT NULL,
  `logo_en` varchar(255) NOT NULL,
  `location_ar` varchar(255) NOT NULL,
  `location_en` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `google` varchar(100) NOT NULL,
  `box_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo_ar`, `logo_en`, `location_ar`, `location_en`, `email`, `phone`, `facebook`, `twitter`, `google`, `box_number`) VALUES
(1, '/images/uploads/155614476054b5de351100cb4be75805efb133034bimage.png', '/images/uploads/155614476091f1c1c3985d1cd97c38089db8cf8b77image.png', '1 شارع 293 (أمام المدخل الرئيسي للهيئة المصرية العامة للبترول وشركة جابكو) – المعادي الجديدة – القاهرة – مصر.', '1 St. No. 293, New Maadi, Cairo, Egypt.', 'hossam@eap.com', '+20 155 558 5024  -  +20 (2)270 22 170', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.google.com', 11742);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `type` enum('Client','Partner') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `type`) VALUES
(1, 'Client'),
(2, 'Partner');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hossam', 'hossam@eap.com', '$2y$10$WmeLbczKuYFnEtCnOgm.ie3phaI4kG.lxAvjrC9bG2LViWv8TUxfW', 'vv4kbRTIja4zJxTpzATsKrrZhsz6l7it3i78RhtDDF298k8RDvY6Z9Fw1PEF', '2017-10-24 09:30:04', '2019-04-12 19:15:10'),
(3, 'asd', 'alaaragab34@gmail.com', '$2y$10$fWvno0l8JE164l0C0V.gleZDir8Xi2CJhH7RqZ6zDdyWo9Sm.jsx.', 'dye6DQWXqRFUaHhtYGAEbSk4bnJWaS1RWeBjJcqT05PYjIqF4MfyLmVxoLHi', '2019-04-10 18:30:56', '2019-04-10 18:30:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type_id`);

--
-- Indexes for table `consultances`
--
ALTER TABLE `consultances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `descriptions`
--
ALTER TABLE `descriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page` (`page`);

--
-- Indexes for table `expertises`
--
ALTER TABLE `expertises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managments`
--
ALTER TABLE `managments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `consultances`
--
ALTER TABLE `consultances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `descriptions`
--
ALTER TABLE `descriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `expertises`
--
ALTER TABLE `expertises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `managments`
--
ALTER TABLE `managments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
