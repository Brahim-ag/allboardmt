<template>
    <dir>
        <h1>Liste des employés</h1>
        <table class="table table-striped table-bordered table-sm">
            <thead>
                <tr>
                    <th>Nom et Prénom</th>
                    <th>Wilaya</th>
                    <th>Numéro Securite Social</th>
                    <th>Numéro Mutuelle</th>
                    <th>Type du Contrat</th>
                    <th>Téléphone</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(employe, index) in employees" :key="index">
                    <td>{{ employe.name }} {{ employe.lastname }}</td>
                    <td>{{ employe.wilaya }}</td>
                    <td>{{ employe.NsocialSecure }}</td>
                    <td>{{ employe.NMutu }}</td>
                    <td>{{ employe.typeContrat }}</td>
                    <td>{{ employe.telephone }}</td>
                    <!-- <td><router-link :to="{name:'editEmploye',params:{id:employe.id}}" >Modifier</router-link></td> -->
                    <td>
                        <inertia-link :href="`/employee/${employe.id}/edit/`"
                            >Modifier</inertia-link
                        >
                    </td>
                </tr>
            </tbody>
        </table>

        <inertia-link :href="`/employee/create/`">Ajouter</inertia-link>
    </dir>
</template>

<script>
export default {
    data: function () {
        return {
            
            employees: [],
        };
    },
    methods: {
        getAll() {
            axios
                .get("api/employees/getall/"+this.$page.props.auth.user.current_team_id)
                .then((response) => {
                    this.employees = response.data.data;
                    console.log(response.data.data)
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
