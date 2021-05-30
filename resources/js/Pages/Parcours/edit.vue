<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Modifer un employé
            </h2>
        </template>
        <div>
            <div class="container mx-auto grid grid-cols-4 gap-3">
                <div class="container mx-auto grid grid-cols-4 gap-3">
                    <h3>Modification Parcours Scolaire</h3>
                    <hr />

                    <div class="form-group">
                        <strong>Niveau d'etude:</strong>
                        <select
                            required
                            class="custom-select d-block w-100"
                            id="state"
                            name="level"
                            v-model="parcourData.level"
                        >
                            <option>
                                {{ parcourData.level }}
                            </option>
                            <option>
                                Infèrieur ou Ègal à la 6ème annèe fondamentale
                                السنة السادسة من التعليم الأساسي أو أقل
                            </option>
                            <option>
                                7ème annèe fondamentale. السنة السابعة من
                                التعليم الأساسي.
                            </option>
                            <option>
                                8ème annèe fondamentale. السنة الثامنة من
                                التعليم الأساسي.
                            </option>
                            <option>
                                Certificat de formation professionnelle
                                spècialisèe "CFPS" (7ème AF - 8ème AF +
                                formation de 12 mois). شــهــادة الــتــكـويـن
                                المهني المـتــخــصص (الــســنــة الــســابــعـة
                                أو الــثــامــنــة من التعليم الأساسي + تكوين 12
                                شهرا).
                            </option>
                            <option>
                                9ème annèe fondamentale السنة التاسعة من التعليم
                                الأساسي.
                            </option>
                            <option>
                                Brevet d'enseignement fondamental "BEF" ou
                                brevet d'enseignement moyen "BEM". شهادة التعليم
                                الأساسي أو شهادة التعليم المتوسط.
                            </option>
                            <option>
                                Certificat d'aptitude professionnelle "CAP"
                                (9ème annèe fondamentale + 12à 18 mois de
                                formation) شهادة الكفاءة المهـنية (السنة التاسعة
                                من التعليم الأساسي + 12 إلى18 شهرا من التكوين).
                            </option>
                            <option>
                                1ère annèe secondaire. السنة الأولى من التعليم
                                الثانوي.
                            </option>
                            <option>
                                Certificat de maitrise professionnelle "CMP"
                                شهادة التحكم المهني.
                            </option>
                            <option>
                                2ème annèe secondaire. السنة الثانية من التعليم
                                الثانوي.
                            </option>
                            <option>
                                3ème annèe secondaire السنة الثالثة من التعليم
                                الثانوي.
                            </option>
                            <option>
                                2ème annèe secondaire + 12 mois de formation.
                                السنة الثانية من التعليم الثانوي + 12 شهرا من
                                التكوين.
                            </option>
                            <option>
                                1ère annèe secondaire + 24 mois de formation.
                                السنة الأولى من التعليم الثانوي + 24 شهرا من
                                التكوين.
                            </option>
                            <option>Baccalaurèat البكالوريا.</option>
                            <option>DiplÔme de technicien. شهادة تقني.</option>
                            <option>
                                Baccalaurèat + 24 mois de formation. البكالوريا
                                + 24 شهرا من التكوين.
                            </option>
                            <option>
                                DiplÔme de technicien supèrieur. شهادة تقني سام
                            </option>
                            <option>
                                DiplÔme d'ètudes universitaires appliquèes
                                "D.E.U.A" شهادة الدراسات الجامعية التطبيقية.
                            </option>
                            <option>
                                Baccalaurèat + 36 mois de formation. البكالوريا
                                + 36 شهرا من التكوين.
                            </option>
                            <option>Licence ليسانس</option>
                            <option>
                                Licence (système LMD). (LMD) ليسانس نظام ل م د
                            </option>
                            <option>
                                DiplÔme d'ètudes supÈrieures (DES). (DES) شهادة
                                الدراسات العليا
                            </option>
                            <option>
                                DiplÔme de l'ècole nationale d'administration.
                                شهادة المدرسة الوطنية للإدارة
                            </option>
                            <option>
                                Baccalaurèat + 5 annèes de formation supèrieure.
                                البكالوريا + 5 سنوات من التكوين العالي
                            </option>
                            <option>
                                Master (système LMD). ماستر نظام "ل م د" (LMD)
                            </option>
                            <option>
                                Licence + Post-graduation spècialisèe. ليسانس +
                                ما بعد التدرج المتخصص
                            </option>
                            <option>Magister. ماجستير</option>
                            <option>
                                DiplÔme de l'ècole nationale d'administration
                                (nouveau régime). شهادة المدرسة الوطنية للإدارة
                                (النظام الجديد).
                            </option>
                            <option>
                                Catègorie rèservèe aux grades de promotion. صنف
                                مخصص لرتب الترقية
                            </option>
                            <option>
                                Doctorat en mèdecine gènèrale. دكتوراه في الطب
                                العام.
                            </option>
                            <option>
                                Catègorie rèservèe aux grades de promotion. صنف
                                مخصص لرتب الترقية
                            </option>
                            <option>
                                Magister (pour l'accès aux grades de
                                l'enseignement supèrieur et de la recherche
                                scientifique). ماجستير (للالتحاق برتب التعليم
                                العالي والبحث العلمي)
                            </option>
                            <option>Doctorat دكتوراه</option>
                            <option>Doctorat d'Etat. دكتوراه دولة.</option>
                            <option>
                                DiplÔme d'ètudes mèdicales spècialisèes (DEMS).
                                شهادة الدراسات الطبية المتخصصة (DEMS)
                            </option>
                            <option>
                                DiplÔme d'ètudes mèdicales spècialisèes (DEMS)
                                (pour l'accès aux grades de l'enseignement
                                supèrieur et de la recherche scientifique)
                                شهـادة الدراسـات الطبـية المـتخـصصة (DEMS)
                                للالتحـاق برتب التـعليم العالي والبحث العلمي
                            </option>
                            <option>
                                Subdivision rèservèe aux grades de promotion.
                                قسم فرعي مخصص لرتب الترقية
                            </option>
                            <option>
                                Doctorat en sciences mèdicales (DESM) دكتوراه في
                                العلوم الطبية (DESM)
                            </option>
                            <option>
                                Habilitation universitaire التأهيل الجامعي.
                            </option>
                            <option>
                                Subdivision rèservèe aux grades de promotion.
                                قسم فرعي مخصص لرتب الترقية
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <strong>Domaine et Filière :</strong>
                        <select
                            class="custom-select d-block w-100"
                            id="state"
                            name="postbac"
                            v-model="parcourData.postbac"
                        >
                           <option>{{parcourData.postbac}}</option>
                          
                            <option
                                v-for="(d, index) in domaine"
                                :key="index"
                                :class="{ 'bg-blue-800 text-white': d.title }"
                                v-bind="{ disabled: d.title }"
                                
                            >
                                {{ d.Nomenclature }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <strong>Spécialité :</strong>
                        <input
                            required
                            type="text"
                            name="spec"
                            class="mt-1 block w-full"
                            v-model="parcourData.spec"
                        />
                    </div>
                    <div class="form-group">
                        <strong>Diplôme :</strong>
                        <input
                            required
                            type="text"
                            v-model="parcourData.gradution"
                            name="gradution"
                            class="mt-1 block w-full"
                        />
                    </div>

                    <div class="form-group">
                        <strong>Etablissement d'Enseignement :</strong>
                        <select
                            name="whereU"
                            class="custom-select d-block w-100"
                            id="state"
                            v-model="parcourData.whereU"
                        >
                            <option>{{ parcourData.whereU }}</option>

                            <option
                                disabled
                                style="
                                    background: green;
                                    color: white;
                                    font-weight: bold;
                                "
                            >
                                Etablissements d'Enseignement Supérieur مؤسسات
                                التعليم العالي
                            </option>

                            <option>Universités الجامعات</option>
                            <option>
                                Université de Béchar - Mohamed Tahri جامعة طاهري
                                محمد بشار
                            </option>
                            <option>
                                Université de Mascara - Mustapha Stambouli جامعة
                                مصطفى اسطمبولي معسكر
                            </option>
                            <option>
                                Université de Saida - Tahar Moulay جامعة الدكتور
                                مولاي الطاهر سعيدة
                            </option>
                            <option>
                                Université de Tlemcen - Abou Bekr Belkaid جامعة
                                أبو بكر بلقايد تلمسان
                            </option>
                            <option>
                                Université d'Adrar - Ahmed Draya جامعة احمد
                                دراية أدرار
                            </option>
                            <option>
                                Université de Tiaret - Ibn Khaldoun جامعة بن
                                خلدون تيارت
                            </option>
                            <option>
                                Université Sidi Bel Abbès - Djillali Liabes
                                جامعة جيلالي ليابس سيدي بلعباس
                            </option>
                            <option>
                                Université de Mostaganem - Abdelhamid Ibn Badis
                                جامعة عبد الحميد ابن باديس مستغانم
                            </option>
                            <option>
                                Universitéd'Oran1 - Ahmed Ben Bella جامعة احمد
                                بن بلة وهران 1 السانية
                            </option>
                            <option>
                                Université Mohamed Boudiaf des sciences et de la
                                technologie - Mohamed Boudiaf d'Oran جامعة محمد
                                بوضياف العلوم والتكنولوجيا- وهران
                            </option>
                            <option>
                                Université d'Oran 2 - Mohamed Ben Ahmed جامعة
                                وهران 2 محمد بن أحمد المدعو الرائد سي موسى
                            </option>
                            <option>
                                Université de Chlef - Hassiba Benbouali جامعة
                                الشلف - حسيبة بن بوعلي
                            </option>
                            <option>
                                Université de Tissemsilt جامعة تيسمسيلت
                            </option>
                            <option>
                                Université de Aïn Témouchent جامعة عين تموشنت
                            </option>
                            <option>Université de Relizane جامعة غليزان</option>
                            <option>
                                Université de Bouira - Akli Mohand Oulhadj جامعة
                                البويرة - آكلي محند أولحاج
                            </option>
                            <option>
                                Université de Djelfa - Ziane Achour جامعة الجلفة
                                - زيان عاشور
                            </option>
                            <option>Université de Ghardaia جامعة غرداية</option>
                            <option>
                                Université de Khemis Miliana - Djilali Bounaama
                                جامعة خميس مليانة - الجيلالي بونعامة
                            </option>
                            <option>
                                Université Médéa - Yahia Farès جامعة المدية -
                                يحي فارس
                            </option>
                            <option>
                                Université des sciences et de la technologie
                                d'Alger, Houari Boumediène جامعة الجزائر هواري
                                بومدين للعلوم و التكنولوجيا
                            </option>
                            <option>
                                Université de Béjaia - Abderrahmane Mira جامعة
                                بجاية - عبد الرحمان ميرة
                            </option>
                            <option>
                                Université de Boumerdès - M'hamed Bougara جامعة
                                بومرداس - محمد بوقرة
                            </option>
                            <option>
                                Université de Tizi Ouzou - Mouloud Maameri جامعة
                                تيزي وزو - مولود معمري
                            </option>
                            <option>
                                Université de Laghouat - Amar Telidji جامعة
                                الأغواط - عمار ثليجي
                            </option>
                            <option>
                                Université Blida 1 - Saad Dahlab جامعة البليدة 1
                                - سعد دحلب
                            </option>
                            <option>
                                Université de Blida 2 - Lounici Ali جامعة
                                البليدة 2 - لونيسي علي
                            </option>
                            <option>
                                Université d'Alger 1 - Benyoucef Benkhedda جامعة
                                الجزائر1 - بن يوسف بن خدة
                            </option>
                            <option>
                                Université d'Alger 2 - Abou el Kacem Saâdallah
                                جامعة الجزائر 2 - أبوالقاسم سعد الله
                            </option>
                            <option>
                                Université d'Alger 3 - Brahim Soltane Chaibout
                                جامعة الجزائر3 ابراهيم سلطان شيبوط
                            </option>
                            <option>
                                Université de la Formation Continue جامعة
                                التكوين المتواصل
                            </option>
                            <option>
                                Université de Tamenghasset جامعة تامنغست
                            </option>
                            <option>
                                Université de Jijel - Mohammed Seddik Ben yahia
                                جامعة جيجل - محمد الصديق بن يحي
                            </option>
                            <option>
                                Université de Tébessa - Larbi Tébessi جامعة تبسة
                                - العربي التبسي
                            </option>
                            <option>
                                Université de Bordj Bou Arréridj - Mohamed
                                Bachir El Ibrahimi جامعة برج بوعريريج - محمد
                                البشير الابراهيمي
                            </option>
                            <option>
                                Université d'El Tarf - Chadli Bendjedid جامعة
                                الطارف - الشاذلي بن جديد
                            </option>
                            <option>
                                Université de Khenchela - Abbas Laghrour جامعة
                                خنشلة - عباس لغرور
                            </option>
                            <option>
                                Université de Oum El Bouaghi - Larbi Ben M'hidi
                                جامعة أم البواقي - العربي بن مهيدي
                            </option>
                            <option>
                                Université d'El Oued - Hamma Lakhdar جامعة
                                الوادي - حمة لخضر
                            </option>
                            <option>
                                Université de Souk Ahras - Mohammed-Chérif
                                Messaadia جامعة سوق أهراس - محمد الشريف مساعدية
                            </option>
                            <option>
                                Université de Annaba - Badji Mokhtar جامعة عنابة
                                - باجي مختار
                            </option>
                            <option>
                                Université du 20 Août 1955 de Skikda جامعة
                                سكيكدة - 20 أوت 1955
                            </option>
                            <option>
                                Université 8 Mai 1945 de Guelma جامعة قالمة - 08
                                ماي 1945
                            </option>
                            <option>
                                Université de Batna 1 - Hadj Lakhder جامعة باتنة
                                1 - الحاج لخضر
                            </option>
                            <option>
                                Université de Biskra - Mohamed Khider جامعة
                                بسكرة - محمد خيضر
                            </option>
                            <option>
                                Université de M'sila - Mohamed Boudiaf جامعة
                                المسيلة - محمد بوضياف
                            </option>
                            <option>
                                Université de Ouargla - Kasdi Merbah جامعة ورقلة
                                - قاصدي مرباح
                            </option>
                            <option>
                                Université des sciences islamiques Emir
                                Abdelkader de Constantine جامعة قسنطينة للعلوم
                                الإسلامية الأمير عبد القادر
                            </option>
                            <option>
                                Université de Sétif 1 - Ferhat Abbas جامعة سطيف1
                                - فرحات عباس
                            </option>
                            <option>
                                Université de Sétif 2 - Mohamed Lamine Debaghine
                                جامعة سطيف2 - لمين دباغين
                            </option>
                            <option>
                                Université de Constantine 1 - Frères Mentouri
                                جامعة قسنطينة1 - الإخوة منتوري
                            </option>
                            <option>
                                Université de Constantine 2 - Abdelhamid Mehri
                                جامعة قسنطينة 2 - عبد الحميد مهري
                            </option>
                            <option>
                                Université de Constantine 3 -Salah Boubnider
                                جامعة قسنطينة 3- المجاهد صالح بوبنيدر
                            </option>
                            <option>
                                Université de Batna 2 - Mustapha Ben Boulaid
                                جامعة باتنة 2 - مصطفى بن بولعيد
                            </option>
                            <option
                                disabled
                                style="
                                    background: green;
                                    color: white;
                                    font-weight: bold;
                                "
                            >
                                Centres Universitaires المراكز الجامعية
                            </option>
                            <option>
                                Centre Universitaire de Naama - Ahmed Salhi
                                المركز الجامعي بالنعامة - صالحي أحمد المدعو علي
                            </option>
                            <option>
                                Centre Universitaire d'El Bayadh - Nour Bachir
                                المركز الجامعي بالبيض - نور البشير
                            </option>
                            <option>
                                Centre Universitaire de Tindouf-Ali Kafi المركز
                                الجامعي بتندوف - المجاهد علي كافي
                            </option>
                            <option>
                                Centre Universitaire de Maghnia المركز الجامعي
                                لمغنية
                            </option>
                            <option>
                                Centre Universitaire de Tipaza - Abdallah Morsli
                                المركز الجامعي بتيبازة - عبد الله مرسلي
                            </option>
                            <option>
                                Centre Universitaire d'Illizi-Cheikh Amoud ben
                                Mokhtar المركز الجامعي إليزي المقاوم الشيخ آمود
                                بن مختار
                            </option>
                            <option>
                                Centre Universitaire d'Aflou المركز الجامعي آفلو
                            </option>
                            <option>
                                Centre Universitaire de Mila - Abdelhafid
                                Boussouf المركز الجامعي لميلة - عبد الحفيظ
                                بوالصوف
                            </option>
                            <option>
                                Centre Universitaire de Barika - Si El Haouès
                                المركز الجامعي بريكة - أحمد حمودة بن عبد الرزاق
                                المدعو سي الحواس
                            </option>
                            <option
                                disabled
                                style="
                                    background: green;
                                    color: white;
                                    font-weight: bold;
                                "
                            >
                                Ecoles Nationales Supérieures مدارس الوطنية
                                العليا
                            </option>
                            <option>
                                Ecole Nationale Polytechnique d'Oran - Maurice
                                Audin المدرسة الوطنية المتعددة التقنيات بوهران -
                                موريس أودان
                            </option>
                            <option>
                                Ecole Supérieure d'Informatique (Sidi Bel
                                Abbes)- 08 Mai 1945 المدرسة العليا للإعلام الآلي
                                بسيدي بلعباس- 08 ماي 1945
                            </option>
                            <option>
                                Ecole Supérieure des Sciences Appliquées de
                                Tlemcen ex EP ST Tlemcen المدرسة العليا في علوم
                                التطبيقية بتلمسان سابقا- ق. ت. ع. ت.- تلمسان
                            </option>
                            <option>
                                Ecole Supérieure de Management de Tlemcen ex
                                EPSECG Tlemcen المدرسة العليا لإدارة الأعمال
                                بتلمسان سابقا- ق. ت.ع.ا.ت.ع.ت – تلمسان
                            </option>
                            <option>
                                Ecole Supérieure d'Economie d'Oran ex EPSECG
                                Oran المدرسة العليا للإقتصاد بوهران سابقا- ق.
                                ت.ع.ا.ت.ع.ت – وھران
                            </option>
                            <option>
                                Ecole Supérieure en Génie Electrique et
                                Energétique d'Oran ex EP ST Oran المدرسة العليا
                                في الهندسة الكهروبائية والطاقوية بوهران سابقا-ق.
                                ت. ع. ت.- وھران
                            </option>
                            <option>
                                Ecole Supérieure Agronomique de Mostaganem ex EP
                                SNV Mostaganem المدرسة العليا في علوم الفلآحة
                                بمستغانم سابقا-ق. ت. ع.ط.ح. - مستغانم
                            </option>
                            <option>
                                Ecole Supérieure des sciences Biologiques d'
                                Oran ex EP SNV Oran المدرسة العليا للعلوم
                                البيولوجية بوهران سابقا-ق. ت. ع.ط.ح. - وھران
                            </option>
                            <option>
                                Ecole Nationale Polytechnique المدرسة الوطنية
                                المتعددة التقنيات
                            </option>
                            <option>
                                Ecole nationale supérieure d'hydraulique -
                                Arbaoui Abdellah المدرسة الوطنية العليا
                                للري-المجاهد عرباوي ‬عبد الله
                            </option>
                            <option>
                                ‎ Ecole nationale supérieure des travaux publics
                                - Francis Jeanson المدرسة الوطنية العليا للأشغال
                                العمومية - فرانسيس جونسون-
                            </option>
                            <option>
                                Ecole nationale supérieure vétérinaire - Rabie
                                Bouchama المدرسة الوطنية العليا للبيطرة-الشهيد
                                الربيع بوشامة
                            </option>
                            <option>
                                Ecole Polytechnique d'architecture et
                                d'Urbanisme-Hocine Aït Ahmed المدرسة المتعددة
                                العلوم للهندسة المعمارية والعمران-المجاهد حسين
                                آيت أحمد
                            </option>
                            <option>
                                Ecole nationale supérieure agronomique- Khalef
                                Abdellah alias Kasdi Merbah المدرسة الوطنية
                                العليا للفلاحة -المجاهد خالف عبد الله المدعو
                                قاصدي مرباح
                            </option>
                            <option>
                                Ecole des hautes études commerciales مدرسة
                                الدراسات العليا التجارية
                            </option>
                            <option>
                                Ecole nationale supérieure d'informatique
                                المدرسة الوطنية العليا للإعلام الآلي
                            </option>
                            <option>
                                Ecole nationale supérieure en statistique et en
                                économie appliquée المدرسة الوطنية العليا
                                للإحصاء والاقتصاد التطبيقي
                            </option>
                            <option>
                                Ecole Supérieure de Commerce-Mouloud Kacem Naït
                                Belkacem المدرسة العليا للتجارة- المجاهد مولود
                                قاسم نايت بلقاسم
                            </option>
                            <option>
                                Ecole nationale supérieure des sciences de la
                                mer et de l'aménagement du littoral المدرسة
                                الوطنية العليا لعلوم البحر و تهيئة الساحل
                            </option>
                            <option>
                                Ecole nationale supérieure de management المدرسة
                                الوطنية العليا للمناجمنت
                            </option>
                            <option>
                                Ecole Nationale Supérieure de Technologie
                                المدرسة الوطنية العليا للتكنولوجيا
                            </option>
                            <option>
                                Ecole nationale supérieure de journalisme et des
                                sciences de l'information المدرسة الوطنية العليا
                                للصحافة وعلوم الإعلام
                            </option>
                            <option>
                                Ecole Nationale Supérieure des sciences
                                politiques المدرسة الوطنية العليا للعلوم
                                السياسية
                            </option>
                            <option>
                                Ecole Supérieure des Sciences de l'Aliment et
                                des Industries Agroalimentaires d'Alger ex EP
                                SNV Alger المدرسة العليا في علوم الغذاء
                                والصناعات الغذائية الفلاحية بالجزائر سابقا- ق.
                                ت. ع.ط.ح -الجزائر
                            </option>
                            <option>
                                Ecole Supérieure des Sciences appliquées d'Alger
                                ex EP ST Alger المدرسة العليا للعلوم التطبيقية -
                                الجزائر سابقا- ق. ت. ع.ت -الجزائر
                            </option>
                            <option>
                                Ecole Supérieure de Gestion et d'Economie
                                Numérique المدرسة العليا للتسيير و الاقتصاد
                                الرقمي
                            </option>
                            <option>
                                Ecole nationale supérieure des mines et de la
                                métallurgie - Amar Laskri المدرسة الوطنية العليا
                                للمناجم والمعادن -المجاهد عمار العسكري
                            </option>
                            <option>
                                Ecole Nationale Polytechnique de Constantine-
                                Malek Bennabi المدرسة الوطنية المتعددة التقنيات
                                بقسنطينة-المفكر مالك بن نبي
                            </option>
                            <option>
                                Ecole Nationale Supérieure de Biotechnologie de
                                Constantine - Tewfik Khaznadar المدرسة الوطنية
                                العليا في البيوتكنولوجيا بقسنطينة - الشهيد توفيق
                                خزندار
                            </option>
                            <option>
                                Ecole Supérieure des Sciences de Gestion de
                                Annaba ex - EPSECG Annaba المدرسة العليا علوم
                                التسير بعنابة سابقا- ق. ت.ع.ا.ت.ع.ت – عنابة
                            </option>
                            <option>
                                Ecole Supérieure des Technologies Industrielles
                                de Annaba ex EP ST Annaba المدرسة العليا
                                التكنولوجيات الصناعية بعنابة سابقا-ق. ت. ع. ت.-
                                عنابة
                            </option>
                            <option>
                                Ecole Supérieure de Comptabilité et de Finance
                                de Constantine ex EPSECG Constantine المدرسة
                                العليا المحاسبة والمالية بقسنطينة سابقا- ق.
                                ت.ع.ا.ت.ع.ت – قسنطينة
                            </option>
                            <option>
                                Ecole nationale supérieure des forêts -
                                Khenchela المدرسة الوطنية العليا للغابات - خنشلة
                            </option>
                            <option>
                                Ecole nationale supérieure des énergies
                                renouvelables, environnement et développement
                                durable - Batna المدرسة الوطنية العليا للطاقات
                                المتجددة والبيئة والتنمية المستدامة
                            </option>
                            <option>
                                Ecole Supérieure en Sciences et Technologies de
                                l'Informatique et du Numérique de Bejaia المدرسة
                                العليا في علوم وتكنولوجيات الإعلام الآلي ببجاية
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <strong>Date d'Obtention :</strong>
                        <input
                            required
                            type="date"
                            v-model="parcourData.year"
                            name="year"
                            class="mt-1 block w-full"
                        />
                    </div>
                </div>

                <input
                    required
                    type="hidden"
                    name="employee_id"
                    v-model="parcourData.employee_id"
                />
            </div>
        </div>

        <button @click="editParcour()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">Valider</button>
    </app-layout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout";

import JetActionMessage from "@/Jetstream/ActionMessage";
import JetActionSection from "@/Jetstream/ActionSection";
import JetButton from "@/Jetstream/Button";
import JetConfirmationModal from "@/Jetstream/ConfirmationModal";
import JetDangerButton from "@/Jetstream/DangerButton";
import JetDialogModal from "@/Jetstream/DialogModal";
import JetFormSection from "@/Jetstream/FormSection";
import JetInput from "@/Jetstream/Input";
import JetInputError from "@/Jetstream/InputError";
import JetLabel from "@/Jetstream/Label";
import JetSecondaryButton from "@/Jetstream/SecondaryButton";
import JetSectionBorder from "@/Jetstream/SectionBorder";

export default {
    components: {
         AppLayout,
        JetActionMessage,
        JetActionSection,
        JetButton,
        JetConfirmationModal,
        JetDangerButton,
        JetDialogModal,
        JetFormSection,
        JetInput,
        JetInputError,
        JetLabel,
        JetSecondaryButton,
        JetSectionBorder,
        
    },
    data() {
        return {
            parcourData: this.parcour,
            domaine: [],
        };
    },
    props: ["parcour"],
    methods: {
        domainList() {
            axios
                .get("/jsonData/domaine.json")
                .then((response) => (this.domaine = response.data));
        },
        editParcour(){
            axios
                .put("/api/parcour/update/" + this.parcourData.id, this.parcourData)

                .then((response) => {
                    if (response.status == 200) {
                        window.location.href = "/parcour/"+ this.parcourData.employee_id;
                    }
                })
                .catch((err) => {
                    console.log(err);
                });
        }
    },
    created() {
        this.domainList();
    },
};
</script>
