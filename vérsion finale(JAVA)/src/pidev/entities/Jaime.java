/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev.entities;

import java.util.Objects;

/**
 *
 * @author EliteBook
 */
public class Jaime {
     private long id;
    private User id_user;
    private Evenement id_evenement;

    public Jaime() {
    }

    public Jaime(long id, User id_user, Evenement id_evenement) {
        this.id = id;
        this.id_user = id_user;
        this.id_evenement = id_evenement;
    }

    public long getId() {
        return id;
    }

    public void setId(long id) {
        this.id = id;
    }

    public User getId_user() {
        return id_user;
    }

    public void setId_user(User id_user) {
        this.id_user = id_user;
    }

    public Evenement getId_evenement() {
        return id_evenement;
    }

    public void setId_evenement(Evenement id_evenement) {
        this.id_evenement = id_evenement;
    }

    @Override
    public int hashCode() {
        int hash = 5;
        hash = 79 * hash + (int) (this.id ^ (this.id >>> 32));
        hash = 79 * hash + Objects.hashCode(this.id_user);
        return hash;
    }

    @Override
    public boolean equals(Object obj) {
        if (this == obj) {
            return true;
        }
        if (obj == null) {
            return false;
        }
        if (getClass() != obj.getClass()) {
            return false;
        }
        final Jaime other = (Jaime) obj;
        if (this.id != other.id) {
            return false;
        }
        if (!Objects.equals(this.id_user, other.id_user)) {
            return false;
        }
        return true;
    }
    
    
}
