<?php

class Concour {

private $id;
private $lastname_c;
private $firstname_c;
private $adress_c;
private $ville;
private $postal;
private $email_c;
private $newsletter_c;
private $checkbox_c;
private $submit_c;


public function checkInfoForm(){

    

}



    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Lastname c
     *
     * @return mixed
     */
    public function getLastnameC()
    {
        return $this->lastname_c;
    }

    /**
     * Set the value of Lastname c
     *
     * @param mixed lastname_c
     *
     * @return self
     */
    public function setLastnameC($lastname_c)
    {
        $this->lastname_c = $lastname_c;

        return $this;
    }

    /**
     * Get the value of Firstname c
     *
     * @return mixed
     */
    public function getFirstnameC()
    {
        return $this->firstname_c;
    }

    /**
     * Set the value of Firstname c
     *
     * @param mixed firstname_c
     *
     * @return self
     */
    public function setFirstnameC($firstname_c)
    {
        $this->firstname_c = $firstname_c;

        return $this;
    }

    /**
     * Get the value of Adress c
     *
     * @return mixed
     */
    public function getAdressC()
    {
        return $this->adress_c;
    }

    /**
     * Set the value of Adress c
     *
     * @param mixed adress_c
     *
     * @return self
     */
    public function setAdressC($adress_c)
    {
        $this->adress_c = $adress_c;

        return $this;
    }

    /**
     * Get the value of Ville
     *
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of Ville
     *
     * @param mixed ville
     *
     * @return self
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get the value of Postal
     *
     * @return mixed
     */
    public function getPostal()
    {
        return $this->postal;
    }

    /**
     * Set the value of Postal
     *
     * @param mixed postal
     *
     * @return self
     */
    public function setPostal($postal)
    {
        $this->postal = $postal;

        return $this;
    }

    /**
     * Get the value of Email c
     *
     * @return mixed
     */
    public function getEmailC()
    {
        return $this->email_c;
    }

    /**
     * Set the value of Email c
     *
     * @param mixed email_c
     *
     * @return self
     */
    public function setEmailC($email_c)
    {
        $this->email_c = $email_c;

        return $this;
    }

    /**
     * Get the value of Newsletter c
     *
     * @return mixed
     */
    public function getNewsletterC()
    {
        return $this->newsletter_c;
    }

    /**
     * Set the value of Newsletter c
     *
     * @param mixed newsletter_c
     *
     * @return self
     */
    public function setNewsletterC($newsletter_c)
    {
        $this->newsletter_c = $newsletter_c;

        return $this;
    }

    /**
     * Get the value of Checkbox c
     *
     * @return mixed
     */
    public function getCheckboxC()
    {
        return $this->checkbox_c;
    }

    /**
     * Set the value of Checkbox c
     *
     * @param mixed checkbox_c
     *
     * @return self
     */
    public function setCheckboxC($checkbox_c)
    {
        $this->checkbox_c = $checkbox_c;

        return $this;
    }

    /**
     * Get the value of Submit c
     *
     * @return mixed
     */
    public function getSubmitC()
    {
        return $this->submit_c;
    }

    /**
     * Set the value of Submit c
     *
     * @param mixed submit_c
     *
     * @return self
     */
    public function setSubmitC($submit_c)
    {
        $this->submit_c = $submit_c;

        return $this;
    }

}
