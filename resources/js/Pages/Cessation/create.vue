<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
               Cessation
            </h2>
        </template>
        <div>
            <div class="container mx-auto grid grid-cols-4 gap-3">
                 <div class="col-md-6 order-md-2 mb-6">
               
                <div class="form-group">
                    <strong>Motif :</strong>
                    <select required class="custom-select d-block w-100" id="state" v-model="cessationData.motif">
                        <option>
                            Déchéance de la Nationalité Algérienne التجريد من الجنسية الجزائرية</option>
                        <option> Perte de la Nationalité Algérienne فقدان الجنسية الجزائرية</option>
                        <option>
                            Déchéance des Droits Civiques فقدان الحقوق المدنية</option>
                        <option>
                            Démission Régulièrement Acceptée الاستقالة المقبولة بصفة قانونية</option>
                        <option>
                            Révocation العـزل</option>
                        <option>
                            Licenciement التسريح</option>
                        <option>
                            Admission à la Retraite الإحالة على التقاعد</option>
                        <option>
                            Décès الوفاة</option>
                        

                    </select>
                </div>


                <div class="form-group">
                    <strong>Type d'Acte :</strong>
                    <input required type="text" v-model="cessationData.typeA" class="form-control">
                </div>


                <div class="form-group">
                    <strong>Date d'Effet :</strong>
                    <input required type="date" v-model="cessationData.dateA" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Numero d'Acte :</strong>
                    <input required type="number" v-model="cessationData.nRef" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Date de Signature :</strong>
                    <input required type="date" v-model="cessationData.dateSign" class="form-control">
                </div>

                 <div class="form-group">
                    <strong>Numéro de Visa CF :</strong>
                    <input required type="number" v-model="cessationData.numberCf" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Date de Visa CF :</strong>
                    <input required type="date" v-model="cessationData.dateEffeCF" class="form-control">
                </div>



               
            </div>
                <input
                    required
                    type="hidden"
                    v-model="cessationData.employee_id"
                />
            </div>
        </div>

        <button @click="postData()" class="btn btn-primary">Valider</button>
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
            cessationData: {},
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
                .post("/api/cessation/store/", this.cessationData)
                .then((response) => {
                    if (response.status == 201) {
                        window.location.href = "/cessation/" + this.employee_id;
                    }
                })
                .catch((e) => {
                    console.log(e);
                });
        },
    },
    created() {
        this.domainList();
        this.cessationData.employee_id = this.employee_id;
    },
};
</script>
