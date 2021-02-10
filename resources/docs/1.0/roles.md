# Koderun Roles
Koderun memiliki beberapa roles yang dapat di assign ke anggota tim kamu, ini adalah roles yang tersedia. Roles mempermudah anda untuk membuat kontrol akses (ACL) yang fleksibel pada workspace anda.

## Pembagian Roles
Pada umumnya, roles di KodeRun dibagi menjadi 4, yaitu Owner, Admin, Editor, dan Member. Nama role ini tidak dapat diubah lagi. berikut adalah penjelasan mengenai setiap roles nya:
1. **Owner:** Memiliki akses ke semua permission, hanya bisa memiliki 1 owner per workspace
1. **Admin:** Admin workspace bisa melakukan apapun kecuali hal yang berhubungan dengan mengedit tim
1. **Editor:** Roles ini tidak bisa memanajemen tim atau menghapus scratchbook
1. **Member:** Role paling basic, hanya bisa melihat scratchbook.

## Scratchbook Permission
Seluruh permission yang menyangkut pembuatan dan pengeditan scratchbook

**✅ : Memiliki permission**

**❌ : Tidak memiliki permission**

| Permission | Owner | Admin | Editor | Member
|--|--|--|--|--|
| Buat scrachbook | ✅ | ✅ | ✅ | ❌ |
| Lihat scrachbook | ✅ | ✅ | ✅ | ✅ |
| Edit scrachbook | ✅ | ✅ | ✅ | ❌ |
| Delete scrachbook | ✅ | ✅ | ❌ | ❌ |
| Clone scrachbook | ✅ | ✅ | ✅ | ❌ |
| Star scrachbook | ✅ | ✅ | ✅ | ❌ |

### Workspace permission
Seluruh permission yang menyangkut manajemen workspace

**✅ : Memiliki permission**

**❌ : Tidak memiliki permission**

| Permission | Owner | Admin | Editor | Member
|--|--|--|--|--|
| Invite ke workspace| ✅ | ✅ | ❌ | ❌ |
| Hapus anggota| ✅ | ✅ | ❌ | ❌ |
| Rename workspace| ✅ | ❌ | ❌ | ❌ |
| Hapus workspace *(WIP)*| ✅ | ❌ | ❌ | ❌ |
