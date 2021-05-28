<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Mise en disponibilité
            </h2>
        </template>
             <div class="col-md-4 order-md-2 mb-4">
                        <div class="form-group">
                            <strong>Adminstration d'Origine :</strong>
                            <input
                                required
                                type="text"
                                name="from"
                                v-model="mutationData.from"
                                class="form-control"
                            />
                        </div>

                        <div class="form-group">
                            <strong>Adminstration d'Acceuil :</strong>
                            <input
                                required
                                type="text"
                                name="to"
                                v-model="mutationData.to"
                                class="form-control"
                            />
                        </div>

                        <div class="form-group">
                            <strong
                                >Numéro d'Accord Final du Ministère :</strong
                            >
                            <input
                                required
                                type="text"
                                
                                v-model="mutationData.numberRef"
                                class="form-control"
                            />
                        </div>

                        <div class="form-group">
                            <strong>Date d'Accord :</strong>
                            <input
                                required
                                type="date"
                                name="dateRef"
                                v-model="mutationData.dateRef"
                                class="form-control"
                            />
                        </div>

                        <div class="form-group">
                            <strong>Type de Mutation :</strong>
                            <select class="form-control" v-model="mutationData.type">
                                <option>
                                    Caractère Général et Périodique - ذات طابع
                                    عام ودوري
                                </option>
                                <option>
                                    Caractère Limité et Ponctuel - ذات طابع
                                    محدود وظرف
                                </option>
                                <option>
                                    Mutation à la Demande -  نقل الموظف بطلب منه
                                </option>
                                <option>
                                    Mutation d'Office -نقل الموظف إجباريا
                                </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <strong>Numéro d'Acte :</strong>
                            <input
                                required
                                type="number"
                                name="Number"
                                v-model="mutationData.Number"
                                class="form-control"
                            />
                        </div>

                        <div class="form-group">
                            <strong>Date de Signature d'Acte :</strong>
                            <input
                                required
                                type="date"
                                name="dateSignature"
                                v-model="mutationData.dateSignature"
                                class="form-control"
                            />
                        </div>

                        <div class="form-group">
                            <strong>Date d'Effet d'Acte :</strong>
                            <input
                                required
                                type="date"
                                name="dateStart"
                                v-model="mutationData.dateStart"
                                class="form-control"
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
            mutationData: this.Mutation,
            domaine: [],
        };
    },
    props: ["Mutation"],
    methods: {
        domainList() {
            axios
                .get("/jsonData/domaine.json")
                .then((response) => (this.domaine = response.data));
        },
        postData() {
            axios
                .put("/api/mutations/update/" + this.mutationData.id, this.mutationData)
                .then((response) => {
                    if (response.status == 200) {
                        window.location.href =
                            "/mutations/" + this.mutationData.employee_id;
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
