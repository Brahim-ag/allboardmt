<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Nouveau Congé
            </h2>
        </template>
        <div>
            <div class="container mx-auto grid grid-cols-4 gap-3">
                <div class="col-md-6 order-md-2 mb-6">
                    <div class="form-group">
                        <strong>Type :</strong>
                        <select
                            required
                            class="custom-select d-block w-100"
                            id="state"
                            v-model="congesData.type"
                        >
                            <option>Repos Hebdomadaire</option>
                            <option>Jours Fériés</option>
                            <option
                                disabled
                                style="
                                    background: blue;
                                    color: white;
                                    font-weight: bold;
                                "
                            >
                                Congé Annuel
                            </option>
                            <option>Période de Travail Effectif</option>
                            <option>Période de Congé Annuel</option>
                            <option>
                                Périodes d'Absences Autorisées par
                                l'Administration;
                            </option>
                            <option>
                                Périodes de Repos Légal Prévues aux Articles 191
                                et 192
                            </option>
                            <option>
                                Périodes de Congé de Maternité, Maladie ou
                                Accident de Travail;
                            </option>
                            <option>
                                Périodes de Maintien ou de Rappel au Service
                                National
                            </option>
                            <option
                                disabled
                                style="
                                    background: blue;
                                    color: white;
                                    font-weight: bold;
                                "
                            >
                                Absences
                            </option>
                            <option>Absence non Justifiée</option>
                            <option>Autorisations d'Absence</option>
                            <option
                                style="
                                    background: green;
                                    color: white;
                                    font-weight: bold;
                                "
                            >
                                Suivre des Etudes
                            </option>
                            <option
                                style="
                                    background: green;
                                    color: white;
                                    font-weight: bold;
                                "
                            >
                                Assurer un Enseignement
                            </option>
                            <option>
                                pour la durée des sessions des assemblées dans
                                lesquelles il exerce un mandat public électif,
                                s'il n'a pas été placé en position de
                                détachement
                            </option>
                            <option
                                style="
                                    background: blue;
                                    color: white;
                                    font-weight: bold;
                                "
                            >
                                Acquitter d'une Mission Liée
                            </option>
                            <option>Représentation Syndicale</option>
                            <option>
                                Participer aux Séminaires de Formation Syndicale
                            </option>
                            <option
                                style="
                                    background: blue;
                                    color: white;
                                    font-weight: bold;
                                "
                            >
                                Participer à des Manifestations Internationales
                            </option>
                            <option>Caractère Sportif</option>
                            <option>Caractère Culturel</option>
                            <option
                                style="
                                    background: blue;
                                    color: white;
                                    font-weight: bold;
                                "
                            >
                                Participer à des Congrès en Rapport avec ses
                                Activités Professionnelles
                            </option>
                            <option>National</option>
                            <option>International</option>
                            <option
                                style="
                                    background: blue;
                                    color: white;
                                    font-weight: bold;
                                "
                            >
                                Participer des Séminaires en Rapport avec ses
                                Activités Professionnelles
                            </option>
                            <option>National</option>
                            <option>International</option>
                            <option
                                style="
                                    background: green;
                                    color: white;
                                    font-weight: bold;
                                "
                            >
                                Pèlerinage aux Lieux Saints de l'Islam
                            </option>
                            <option
                                style="
                                    background: blue;
                                    color: white;
                                    font-weight: bold;
                                "
                            >
                                Absence Spéciale
                            </option>
                            <option>Mariage du Fonctionnaire</option>
                            <option>
                                Naissance d'un Enfant du Fonctionnaire
                            </option>
                            <option>
                                Circoncision d'un Enfant du Fonctionnaire
                            </option>
                            <option>
                                Mariage d'un Descendant du Fonctionnaire
                            </option>
                            <option
                                disabled
                                style="
                                    background: blue;
                                    color: white;
                                    font-weight: bold;
                                "
                            >
                                Décès
                            </option>
                            <option>Décès Conjoint du Fonctionnaire</option>
                            <option>
                                Décès Ascendant du Fonctionnaire ou de son
                                Conjoint.
                            </option>
                            <option>Décès Grand-père</option>
                            <option>Décès Grand-mère</option>
                            <option>
                                décès d'un ascendant, d'un descendant ou
                                collatéral direct du fonctionnaire ou de son
                                conjoint.
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <strong>Date de Départ :</strong>
                        <input
                            required
                            type="date"
                            v-model="congesData.dateD"
                            class="form-control"
                        />
                    </div>

                    <div class="form-group">
                        <strong>Durée : </strong>

                        <strong>Années</strong>
                        <select v-model="congesData.year">
                            <option v-for="i in 10" :key="i">{{ i }}</option>
                        </select>
                        <strong>Mois</strong>
                        <select v-model="congesData.month">
                            <option v-for="i in 12" :key="i">{{ i }}</option>
                        </select>
                        <strong>Jours</strong>

                        <select v-model="congesData.day">
                            <option v-for="i in 31" :key="i">{{ i }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <strong>Numéro de l'Acte</strong>
                        <input
                            required
                            type="text"
                            v-model="congesData.nRef"
                            class="form-control"
                        />
                    </div>
                    <div class="form-group">
                        <strong>Date de Signature</strong>
                        <input
                            required
                            type="date"
                            v-model="congesData.dateSign"
                            class="form-control"
                        />
                    </div>
                </div>
                <input
                    required
                    type="hidden"
                    v-model="congesData.employee_id"
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
            congesData: {},
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
                .post("/api/conge/store/", this.congesData)
                .then((response) => {
                    if (response.status == 201) {
                        window.location.href = "/conge/" + this.employee_id;
                    }
                })
                .catch((e) => {
                    console.log(e);
                });
        },
    },
    created() {
        this.domainList();
        this.congesData.employee_id = this.employee_id;
    },
};
</script>
