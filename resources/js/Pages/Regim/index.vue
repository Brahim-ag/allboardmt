<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Regime Disciplinaire
            </h2>
        </template>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <table class="border-collapse border table-auto">
                <tr>
                <th>Degré de la Sanction</th>
            <th>Type de Faute</th>
            <th>Date de la Faute</th>
            <th>Type de Sanction</th>
            <th>Numéro de PV CAP</th>
            <th>Date de PV CAP</th>
            <th>Degré Sanction</th>
            <th>Type Sanction</th>
            <th>Numéro d'Acte de Sanction</th>
            <th>Date de Signature d'Acte</th>
            <th>Date d'Effet d'Acte</th>
 
            </tr>

                <tr v-for="(regim, index) in regims" :key="index">
                     <td>{{ regim.degre }}</td>
                <td>{{ regim.typef }}</td>
                <td>{{ regim.datef }}</td>
                <td>{{ regim.typeS }}</td>
                <td>{{ regim.nPV }}</td>
                <td>{{ regim.datePV }}</td>
                <td>{{ regim.degreSonctCom }}</td>
                <td>{{ regim.typeSonctCom }}</td>
                <td>{{ regim.nacte }}</td>
                <td>{{ regim.datesign }}</td>
                <td>{{ regim.dateeff }}</td>

                    <td>
                        <inertia-link :href="`/regim/edit/${regim.id}`">
                            modifier
                        </inertia-link>
                    </td>
                </tr>
            </table>
            <inertia-link :href="`/regim/create/${this.employe_id}`"
                >Ajouter</inertia-link
            >
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
    props: ["employe_id"],
    data() {
        return {
            regims: [],
        };
    },
    components: {
        AppLayout,
    },
    methods: {
        getAll() {
            axios
                .get("/api/regim/getall/" + this.employe_id)
                .then((response) => {
                    console.log(response.data);
                    this.regims = response.data;
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
    created() {
        this.getAll();
    },
};
</script>
