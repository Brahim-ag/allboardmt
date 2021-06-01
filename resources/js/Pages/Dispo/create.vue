<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                mise en disponibilité
            </h2>
        </template>
        <div>
            <div class="container mx-auto grid grid-cols-4 gap-3">
                <div class="row">
                    <div class="container mx-auto grid grid-cols-4 gap-3">
              
                <hr>


                <div class="form-group">
                    <strong>type MvtM :</strong>
                    <select class="mt-1 block w-full" v-model="disposData.typeM">
                        <option>Mise en disponibilité</option>
                        <option>Reconduction</option>
                        <option>Réintégration</option>
                    </select>
                </div>

                <div class="form-group">
                    <strong>Motif:</strong>
                    <select class="custom-select d-block w-100" id="state" v-model="disposData.motif">
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
                    <strong>Durée:</strong>
                    <input required type="text" v-model="disposData.duree" class="mt-1 block w-full">
                </div>
                <div class="form-group">
                    <strong>N° Act:</strong>
                    <input required type="number" v-model="disposData.number" class="mt-1 block w-full">
                </div>
                <div class="form-group">
                    <strong>Date de signature Act:</strong>
                    <input required type="date" v-model="disposData.dateSign" class="mt-1 block w-full">
                </div>
                <div class="form-group">
                    <strong>Date d’effet: Act</strong>
                    <input required type="date" v-model="disposData.dateEffe" class="mt-1 block w-full">
                </div>











            </div>
                </div>
                <input
                    required
                    type="hidden"
                    v-model="disposData.employee_id"
                />
            </div>
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
            disposData: {},
            domaine: [],
        };
    },
    props: ["employee_id"],
    methods: {
        domainList() {
            axios
                .get("/jsonData/domaine.json")
                .then((response) => (this.domaine = response.data));
        },
        postData() {
            axios
                .post("/api/dispo/store", this.disposData)
                .then((response) => {
                    if (response.status == 201) {
                        window.location.href = "/dispo/" + this.employee_id;
                    }
                })
                .catch((e) => {
                    console.log(e);
                });
        },
    },
    created() {
        this.domainList();
        this.disposData.employee_id = this.employee_id;
    },
};
</script>
