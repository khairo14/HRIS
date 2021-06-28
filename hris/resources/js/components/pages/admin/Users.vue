<template>
<v-app>
<v-simple-table>
    <template v-slot:top>
        <v-toolbar flat >
            <v-toolbar-title>Users</v-toolbar-title>
            <v-spacer></v-spacer>

            <v-dialog v-model="dialog" max-width="500px">
                <template v-slot:activator="{ on, attrs }">
                <v-btn v-bind="attrs" v-on="on">add</v-btn>
                </template>

                <v-card>
                    <v-card-title>
                        <span class="text-h5">Title</span>
                    </v-card-title>

                <v-text-field
                    v-model="name"
                    :rules="[() => !!name || 'This field is required']"
                    placeholder="Name"
                    :error-messages="errorMessages"
                    label="Full Name"
                    >
                </v-text-field>
                <v-text-field
                    v-model="email"
                    :rules="[() => !!email || 'This field is required']"
                    placeholder="Email"
                    :error-messages="errorMessages"
                    label="Email"
                    >
                </v-text-field>

                 <v-divider class="mt-12"></v-divider>
                   <v-card-actions>
                        <v-btn text>
                            Cancel
                        </v-btn>
                        <v-spacer></v-spacer>
                   </v-card-actions>
                </v-card>

            </v-dialog>

        </v-toolbar>
    </template>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Asd</td>
            <td>Asd@email.com</td>
            <td>User</td>
        </tr>
    </tbody>
</v-simple-table>


</v-app>

</template>

<script>
export default {
    data: () => ({
         dialog: false,
        // dialogDelete: false,

    watch: {
      dialog (val) {
        val || this.close()
      },
    }

    })

  }
</script>
