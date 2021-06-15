<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Modification de mise en disponibilité
            </h2>
        </template>
            <div>
                 <div class="row">
                    <div>
              </div>
                <hr>


                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Type de mouvement:</label>
                    <select class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" v-model="disposData.typeM">
                        <option>Mise en disponibilité</option>
                        <option>Reconduction</option>
                        <option>Réintégration</option>
                    </select>
                </div>

                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Motif:</label>
                    <select class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="state" v-model="disposData.motif">
                        <option disabled>Choisir...</option>
                        <option><span style="font-weight:bold">Accident</span> Ascendant - حادث الأصول</option>
                        <option><span style="font-weight:bold">Accident</span> Conjoint - حادث زوجه </option>
                        <option><span style="font-weight:bold">Accident</span> Enfant à Charge - حادث الأبناء المتكفل بهم
                        </option>
                        <option><span style="font-weight:bold">Infirmité</span> Ascendant - إعاقة الأصول</option>
                        <option><span style="font-weight:bold">Infirmité</span> Conjoint - إعاقة زوجه </option>
                        <option><span style="font-weight:bold">Infirmité</span> Enfant à Charge - إعاقة الأبناء المتكفل بهم
                        </option>
                        <option><span style="font-weight:bold">Maladie Grave</span> Ascendant - مرض خطير الأصول</option>
                        <option><span style="font-weight:bold">Maladie Grave</span> Conjoint - مرض خطير زوجه </option>
                        <option><span style="font-weight:bold">Maladie Grave</span> Enfant à Charge - مرض خطير الأبناء
                            المتكفل بهم </option>
                        <option>Femme Fonctionnaire Elever un Enfant de Moins de Cinq (5) Ans - سماح للزوجة الموظفة بتربية
                            طفل يقل عمره عن خمس (5) سنوات</option>
                        <option>Fonctionnaire de Suivre son Conjoint Astreint à Changer de Résidence pour Raison
                            Professionnelle - سماح للموظف بالالتحاق بزوجه إذا اضطر إلى تغيير إقامته بحكم مهنته</option>
                        <option>Membre Dirigeant d'un Parti Politique - تمكين الموظف من ممارسة مهام عضو مسير لحزب سياسي
                        </option>
                        <option disabled>Conjoint du Fonctionnaire est Affecté - تعين زوج الموظف</option>
                        <option>Représentation Algérienne à l'Etranger ممثلية جزائرية في الخارج</option>
                        <option>
                        Institution International مؤسسة دولية</option>
                        <option>
                        Organisme International هيئة دولية</option>
                        <option>
                        Mission de Coopération مهمة تعاون</option>
                       

                        <option>Effectuer des Etudes - القيام بدراسات</option>
                        <option>Effectuer des Travaux de Recherche - القيام بأعمال بحث</option>

                    </select>
                </div>


                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Durée:</label>
                    <input required type="text" v-model="disposData.duree" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">N° Act:</label>
                    <input required type="number" v-model="disposData.number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Date de signature Act:</label>
                    <input required type="date" v-model="disposData.dateSign" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Date d’effet: Act</label>
                    <input required type="date" v-model="disposData.dateEffe" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>











            </div>
            <input
                    required
                    type="hidden"
                    v-model="disposData.employee_id"
                />
        </div>

        <button @click="postData()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">Valider</button>
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
            disposData: this.Dispo,
            domaine: [],
        };
    },
    props: ["Dispo"],
    methods: {
        domainList() {
            axios
                .get("/jsonData/domaine.json")
                .then((response) => (this.domaine = response.data));
        },
        postData() {
            axios
                .put("/api/dispo/update/" + this.disposData.id, this.disposData)
                .then((response) => {
                    if (response.status == 200) {
                        window.location.href =
                            "/dispo/" + this.disposData.employee_id;
                    }
                })
                .catch((e) => {
                    console.log(e);
                });
        },
    },
    created() {
        this.domainList();
    },
};
</script>
