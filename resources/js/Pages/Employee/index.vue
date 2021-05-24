<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Liste des employés
            </h2>
        </template>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <table class="border-collapse border table-auto">
                <thead>
                    <tr>
                        <th class="w-1/2">Nom et Prénom</th>
                        <th class="w-1/1">Wilaya</th>
                        <th class="w-1/1">Numéro Securite Social</th>
                        <th class="w-1/1">Numéro Mutuelle</th>
                        <th class="w-1/1">Type du Contrat</th>
                        <th class="w-1/1">Téléphone</th>
                        <th class="w-1/1"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        v-for="(employe, index) in employees"
                        :key="index"
                        class="bg-emerald-200"
                    >
                        <td class="border">
                            <inertia-link :href="`/employe/show/${employe.id}`">
                                {{ employe.name }} {{ employe.lastname }}
                            </inertia-link>
                        </td>
                        <td class="border">{{ employe.wilaya }}</td>
                        <td class="border">{{ employe.NsocialSecure }}</td>
                        <td class="border">{{ employe.NMutu }}</td>
                        <td class="border">{{ employe.typeContrat }}</td>
                        <td class="border">{{ employe.telephone }}</td>
                       <router-link :to="{ path: '/employe/edit', params: { id: employe.id }}">
                       home
                       </router-link>
                        <!-- <td class="border"><router-link :to="{name:'editEmploye',params:{id:employe.id}}" >Modifier</router-link></td> -->
                        <td class="border">
                            <inertia-link :href="`/employe/edit/${employe.id}`"
                                >Modifier</inertia-link
                            >
                        </td>
                    </tr>
                </tbody>
            </table>

            <inertia-link :href="`/employe/create/`">Ajouter</inertia-link>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
export default {
    components: {
        AppLayout,
    },
    data: function () {
        return {
            employees: [],
        };
    },
    methods: {
        getAll() {
            axios
                .get(
                    "api/employees/getall/" +
                        this.$page.props.auth.user.current_team_id
                )
                .then((response) => {
                    this.employees = response.data.data;
                    console.log(response.data.data);
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
    created() {
        this.getAll();
    },
    computed: {
        user() {
            return this.$page.props.auth.user;
        },
    },
};
</script>
