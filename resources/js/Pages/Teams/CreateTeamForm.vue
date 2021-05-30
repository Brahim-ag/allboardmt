<template>
    <jet-form-section @submitted="createTeam">
        <template #title> Team Details </template>

        <template #description>
            Create a new team to collaborate with others on projects.
        </template>

        <template #form>
            <div class="col-span-6">
                <jet-label value="Team Owner" />

                <div class="flex items-center mt-2">
                    <img
                        class="w-12 h-12 rounded-full object-cover"
                        :src="$page.props.user.profile_photo_url"
                        :alt="$page.props.user.name"
                    />

                    <div class="ml-4 leading-tight">
                        <div>{{ $page.props.user.name }}</div>
                        <div class="text-gray-700 text-sm">
                            {{ $page.props.user.email }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-6 sm:col-span-4">
                <jet-label for="name" value="Team Name" />
                <!-- <input id="name" type="text" class="mt-1 block w-full" v-model="form.name" autofocus /> -->
                <select
                    id="name"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    autofocus
                >
                    <option>-----------</option>
                    <option>
                        Centre National des Etudes et de la Recherche en
                        Industrie du Bâtiment - CNERIB المركز الوطني للدراسات و
                        الأبحاث المتكاملة في البناء
                    </option>
                    <option>
                        Centre National de Recherche Appliquée en Génie
                        Parasismique CGS المركز الوطني للبحث المطبق في هندسة
                        الزلازل
                    </option>
                    <option>
                        Office de Promotion et de Gestion Immobilières OPGI
                        ديوان الترقية و التسيير العقاري
                    </option>
                    <option>
                        Agence nationale pour l'Amélioration et le Développement
                        du Logement AADL الوكالة الوطنية لتحسين السكن وتطويره
                    </option>
                    <option>
                        Caisse Nationale du Logement CNL الصندوق الوطني للسكن
                    </option>
                    <option>
                        Fonds de Garantie et de Caution Mutuelle de la Promotion
                        Immobilière FGCMPI الصندوق الضمان و الكفالة المتبادلة في
                        الترقية العقارية
                    </option>
                    <option>
                        Centre National d'Etudes et d'Animation de l'Entreprise
                        du Bâtiment, des Travaux Publics et de l'Hydraulique
                        CNAT المركز الوطني للدراسات و تنشيط مؤسسة البناء و
                        الأشغال العمومية و الري
                    </option>
                    <option>
                        Centre National d’Ingénierie de la Construction CNIC
                        المركز الوطني لهندسة البناء
                    </option>
                    <option>
                        Organisme National de Contrôle Technique de Construction
                        CTC الهيئة الوطنية المراقبة التقنية للبناء
                    </option>
                    <option>
                        Laboratoire National de l’Habitat et de la Construction
                        LNHC المخبر الوطني للسكن و البناء
                    </option>
                    <option>
                        Observatoire National de la Ville ONV المرصد الوطني
                        للمدينة
                    </option>
                    <option>
                        Entreprise National de Promotion Immobilière ENPI
                        المؤسسة الوطنية للترقية العقارية
                    </option>
                    <option>
                        Agence Nationale de l'Urbanisme ANURB الوكالة الوطنية
                        للتعمير
                    </option>
                    <option>
                        Groupe public des Etudes et Engineering GEE المجمع
                        العمومي للدراسات و الهندسة
                    </option>
                    <option>Groupe Construction GRCN مجمع البناء</option>
                    <option>
                        Direction de l'Urbanisme, de l'Architecture et de la
                        Construction DUAC مديرية التعمير والهندسة المعمارية
                        والبناء
                    </option>
                    <option>Direction du Logement DL مديرية السكن</option>
                    <option>
                        Direction des Equipements Publics DEP مديرية التجهيزات
                        العمومية
                    </option>
                    <option>
                        Direction de l'Urbanismeet de la Construction DUC مديرية
                        التعمير والبناء
                    </option>
                    <option>
                        Direction du Logement et des Equipements Publics DLEP
                        مديرية السكن و التجهيزات العمومية
                    </option>
                    <option>
                        Ministère de l'Habitat, de l'Urbanisme et de la Ville
                        MHUV وزارة السكن و العمران و المدينة
                    </option>
                    <option>
                        Ministère de l'Habitat et de l'Urbanisme MHU وزارة السكن
                        و العمران
                    </option>
                    <option>
                        Etablissement Public de la Ville Nouvelle de SIDI
                        ABDELLAH EVNSA المؤسسة العمومية للمدينة الجديدة سيدي عبد
                        الله
                    </option>
                    <option>
                        Etablissement Public de la Ville Nouvelle de BOUINAN
                        EVNB المؤسسة العمومية للمدينة الجديدة بوعينان
                    </option>
                    <option>
                        Etablissement Public de la Ville Nouvelle de BOUGHZOUL
                        ENVBG المؤسسة العمومية للمدينة الجديدة بوغزول
                    </option>
                    <option>
                        Etablissement Public de la Ville Nouvelle de HASSI
                        MESSAOUD ENVBG المؤسسة العمومية للمدينة الجديدة حاسي
                        مسعود
                    </option>
                    <option>
                        Etablissement Public de la Ville Nouvelle de EL MENIA
                        EVNM المؤسسة العمومية للمدينة الجديدة المنيعة
                    </option>
                    <option>
                        Etablissement d'Aménagement de la Ville de DRAA ERRICH
                        EAVDE المؤسسة تهيئة مدينة ذراع الريش
                    </option>
                    <option>
                        Etablissement d'Aménagement des Villes de Ain Nahas, et
                        de Ali Mendjeli EAVANAM المؤسسة تهيئة مدينتي عين النحاس
                        و علي منجلي
                    </option>
                </select>

                <input-error :message="form.errors.name" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <jet-label for="direction" value="Direction" />
                <!-- <input id="name" type="text" class="mt-1 block w-full" v-model="form.name" autofocus /> -->
                <select
                    id="direction"
                    class="mt-1 block w-full"
                    v-model="form.direction"
                    autofocus
                >
                    <option>------</option>
                    <option>Adrar</option>
                    <option>Chlef</option>
                    <option>Laghouat</option>
                    <option>Oum El Bouaghi</option>
                    <option>Batna</option>
                    <option>Béjaïa</option>
                    <option>Biskra</option>
                    <option>Béchar</option>
                    <option>Blida</option>
                    <option>Bouira</option>
                    <option>Tamanrasset</option>
                    <option>Tébessa</option>
                    <option>Tlemcen</option>
                    <option>Tiaret</option>
                    <option>Tizi Ouzou</option>
                    <option>Alger</option>
                    <option>Djelfa</option>
                    <option>Jijel</option>
                    <option>Sétif</option>
                    <option>Saïda</option>
                    <option>Skikda</option>
                    <option>Sidi Bel Abbès</option>
                    <option>Annaba</option>
                    <option>Guelma</option>
                    <option>Constantine</option>
                    <option>Médéa</option>
                    <option>Mostaganem</option>
                    <option>M'Sila</option>
                    <option>Mascara</option>
                    <option>Ouargla</option>
                    <option>Oran</option>
                    <option>El Bayadh</option>
                    <option>Illizi</option>
                    <option>Bordj Bou Arreridj</option>
                    <option>Boumerdès</option>
                    <option>El Tarf</option>
                    <option>Tindouf</option>
                    <option>Tissemsilt</option>
                    <option>El Oued</option>
                    <option>Khenchela</option>
                    <option>Souk Ahras</option>
                    <option>Tipaza</option>
                    <option>Mila</option>
                    <option>Aïn Defla</option>
                    <option>Naâma</option>
                    <option>Aïn Témouchent</option>
                    <option>Ghardaïa</option>
                    <option>Relizane</option>
                </select>

                <input-error :message="form.errors.name" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <jet-button
                :class="{ 'opacity-25': form.processing }"
                :disabled="form.processing"
            >
                Create
            </jet-button>
        </template>
    </jet-form-section>
</template>

<script>
import JetButton from "@/Jetstream/Button";
import JetFormSection from "@/Jetstream/FormSection";
import JetInput from "@/Jetstream/Input";
import JetInputError from "@/Jetstream/InputError";
import JetLabel from "@/Jetstream/Label";

export default {
    components: {
        JetButton,
        JetFormSection,
        JetInput,
        JetInputError,
        JetLabel,
    },

    data() {
        return {
            form: this.$inertia.form({
                name: "",
                direction: "",
            }),
        };
    },

    methods: {
        createTeam() {
            this.form.post(route("teams.store"), {
                errorBag: "createTeam",
                preserveScroll: true,
            });
        },
    },
};
</script>
