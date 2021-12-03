<?php


class Appointments
{
    private $conn;

    public $table_name = "tbl_appointments";

    public $id;
    public $client_id;
    public $freelancer_id;
    public $job_post_id;
    public $proj_desc;
    public $proj_cost;
    public $proj_addr;
    public $start_date;
    public $end_date;
    public $service;
    public $created_at;
    public $status;
    public $page;
    public $start;
    public $limit;
    public $role;
    public $photo;
    public $fb_from;
    public $fb_to; 
    public $fb_comment;
    public $fb_star;


    public function __construct($db)
    {
        $this->conn = $db;
    }

    // fetch all appointmens
    public function client_fetch_my_appointments()
    {
        // echo $this->client_id;
        // Create query
        if (is_null($this->limit)) {
            $record_per_page = 10;
            $start_from = ($this->page - 1) * $record_per_page;
            $query = "SELECT * FROM $this->table_name where client_id = '$this->client_id'
            and (c_status != 'done' || f_status != 'done') ORDER by created_at DESC LIMIT $start_from, $record_per_page";
            $stmt = $this->conn->query($query);
            return $stmt;
        } else {
            $record_per_page = $this->limit;
            $start_from = ($this->start - 1) * $record_per_page;

            // if(is_null($this->page)){
            //     $query = "SELECT * FROM $this->table_name where client_id = '$this->client_id'";
            // }else{
            $query = "SELECT * FROM $this->table_name where client_id = '$this->client_id' 
            ORDER by created_at DESC LIMIT $start_from, $record_per_page";
            // // }


            // //execute query
            // $stmt = $this->conn->query($query);

            // return $stmt;
            $stmt = $this->conn->query($query);
            return $stmt;
        }
    }

    public function client_fetch_feedbacks()
    {
        // Create query
        $query = "SELECT * FROM tbl_feedbacks where appointment_id = '$this->id'";

        //execute query
        $stmt = $this->conn->query($query);

        return $stmt;
    }

    public function fetch_photos()
    {
        // Create query
        $query = "SELECT * FROM tbl_fbphoto where appointment_id = '$this->id'";

        //execute query
        $stmt = $this->conn->query($query);

        return $stmt;
    }

    // fetch all appointmens
    public function client_fetch_profile_appointments()
    {

        $record_per_page = $this->limit;
        $start_from = ($this->start - 1) * $record_per_page;

        if ($this->role == "freelancer") {
            // Create query
            $query = "SELECT * FROM $this->table_name where freelancer_id = '$this->freelancer_id' 
            and c_status='done' and f_status='done'
            ORDER by created_at DESC LIMIT $start_from, $record_per_page";

            //execute query
            $stmt = $this->conn->query($query);

            return $stmt;
        } else if ($this->role == "client") {
            // Create query
            $query = "SELECT * FROM $this->table_name where client_id = '$this->client_id'
            and c_status='done' and f_status='done'
            ORDER by created_at DESC LIMIT $start_from, $record_per_page";

            //execute query
            $stmt = $this->conn->query($query);

            return $stmt;
        }
    }

    public function hired_fetch_search_freelancer_count()
    {
        // Create query
        $query = "SELECT COUNT(*) as total_freelancer_count FROM $this->table_name 
        WHERE $this->filter_search LIKE '%$this->search%' AND role='freelancer'";

        //execute query
        $stmt = $this->conn->query($query);

        return $stmt;
    }

    // fetch all appointmens
    public function freelancer_fetch_my_appointments()
    {
        // echo $this->client_id;
        // Create query
        if (is_null($this->limit)) {
            $record_per_page = 10;
            $start_from = ($this->page - 1) * $record_per_page;
            $query = "SELECT * FROM $this->table_name where freelancer_id = '$this->freelancer_id'
            and (c_status != 'done' || f_status != 'done') ORDER by created_at DESC LIMIT $start_from, $record_per_page";
            $stmt = $this->conn->query($query);
            return $stmt;
        } else {
            $record_per_page = $this->limit;
            $start_from = ($this->start - 1) * $record_per_page;

            // if(is_null($this->page)){
            //     $query = "SELECT * FROM $this->table_name where client_id = '$this->client_id'";
            // }else{
            $query = "SELECT * FROM $this->table_name where freelancer_id = '$this->freelancer_id' 
            ORDER by created_at DESC LIMIT $start_from, $record_per_page";
            // // }


            // //execute query
            // $stmt = $this->conn->query($query);

            // return $stmt;
            $stmt = $this->conn->query($query);
            return $stmt;
        }
    }

    //add job
    public function addAppointment()
    {
        $query = "INSERT INTO $this->table_name (client_id, freelancer_id, jobpost_id, proj_desc,
         proj_cost, proj_addr, start_date, end_date, service, created_at)
        VALUES (?,?,?,?,?,?,?,?,?, NOW() )";

        $array = $this->service;
        $cameArray = implode(",", $array);

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param(
            "ssissssss",
            $this->client_id,
            $this->freelancer_id,
            $this->job_post_id,
            $this->proj_desc,
            $this->proj_cost,
            $this->proj_addr,
            $this->start_date,
            $this->end_date,
            $cameArray
        );

        if ($stmt->execute()) {
            $query = "UPDATE tbl_jobs SET status = ? WHERE id = ?";

            $stmt = mysqli_stmt_init($this->conn);

            if (!mysqli_stmt_prepare($stmt, $query)) {
                echo "SQL statement failed";
            } else {
                $status_occupied = "occupied";
                mysqli_stmt_bind_param(
                    $stmt,
                    "si",
                    $status_occupied,
                    $this->job_post_id
                );

                if (mysqli_stmt_execute($stmt)) {
                    return true;
                }
            }

            return true;
        }
        return false;
    }

    public function c_cancelAppointment()
    {
        $query = "UPDATE $this->table_name SET c_status = ? WHERE id = ?";

        $stmt = mysqli_stmt_init($this->conn);

        if (!mysqli_stmt_prepare($stmt, $query)) {
            echo "SQL statement failed";
        } else {
            $status_occupied = "cancel";
            mysqli_stmt_bind_param(
                $stmt,
                "si",
                $status_occupied,
                $this->id
            );

            if (mysqli_stmt_execute($stmt)) {
                $query2 = "SELECT * FROM $this->table_name where id = '$this->id'";

                $stmt2 = mysqli_stmt_init($this->conn);

                if (!mysqli_stmt_prepare($stmt2, $query2)) {
                    echo "SQL statement failed";
                } else {
                    mysqli_stmt_execute($stmt2);
                    $result2 = mysqli_stmt_get_result($stmt2);
                    while ($row = mysqli_fetch_assoc($result2)) {
                        $my_id = $row['id'];
                        $my_c_status = $row['c_status'];
                        $my_f_status = $row['f_status'];
                        $my_jobpost_id = $row['jobpost_id'];
                        if ($my_c_status == $my_f_status) {
                            $query3 = "DELETE FROM $this->table_name WHERE id = '$my_id'";

                            $stmt3 = mysqli_stmt_init($this->conn);

                            if (!mysqli_stmt_prepare($stmt3, $query3)) {
                                echo "SQL statement failed";
                            } else {
                                if (mysqli_stmt_execute($stmt3)) {
                                }
                            }

                            $query4 = "UPDATE tbl_jobs SET status = ? WHERE id = ?";

                            $stmt4 = mysqli_stmt_init($this->conn);

                            if (!mysqli_stmt_prepare($stmt4, $query4)) {
                                echo "SQL statement failed";
                            } else {
                                $status_post = "";
                                mysqli_stmt_bind_param(
                                    $stmt4,
                                    "si",
                                    $status_post,
                                    $my_jobpost_id
                                );

                                if (mysqli_stmt_execute($stmt4)) {
                                    return "deleted";
                                }
                            }

                        }
                        // return $my_c_status;

                        // echo $my_c_status;
                        // echo $my_f_status;
                    }
                }

                return "updated";
            }
            return "failed";
        }
    }

    public function f_cancelAppointment()
    {
        $query = "UPDATE $this->table_name SET f_status = ? WHERE id = ?";

        $stmt = mysqli_stmt_init($this->conn);

        if (!mysqli_stmt_prepare($stmt, $query)) {
            echo "SQL statement failed";
        } else {
            $status_occupied = "cancel";
            mysqli_stmt_bind_param(
                $stmt,
                "si",
                $status_occupied,
                $this->id
            );

            if (mysqli_stmt_execute($stmt)) {
                $query2 = "SELECT * FROM $this->table_name where id = '$this->id'";

                $stmt2 = mysqli_stmt_init($this->conn);

                if (!mysqli_stmt_prepare($stmt2, $query2)) {
                    echo "SQL statement failed";
                } else {
                    mysqli_stmt_execute($stmt2);
                    $result2 = mysqli_stmt_get_result($stmt2);
                    while ($row = mysqli_fetch_assoc($result2)) {
                        $my_id = $row['id'];
                        $my_c_status = $row['c_status'];
                        $my_f_status = $row['f_status'];
                        $my_jobpost_id = $row['jobpost_id'];
                        if ($my_c_status == $my_f_status) {
                            $query3 = "DELETE FROM $this->table_name WHERE id = '$my_id'";

                            $stmt3 = mysqli_stmt_init($this->conn);

                            if (!mysqli_stmt_prepare($stmt3, $query3)) {
                                echo "SQL statement failed";
                            } else {
                                if (mysqli_stmt_execute($stmt3)) {
                                }
                            }

                            $query4 = "UPDATE tbl_jobs SET status = ? WHERE id = ?";

                            $stmt4 = mysqli_stmt_init($this->conn);

                            if (!mysqli_stmt_prepare($stmt4, $query4)) {
                                echo "SQL statement failed";
                            } else {
                                $status_post = "";
                                mysqli_stmt_bind_param(
                                    $stmt4,
                                    "si",
                                    $status_post,
                                    $my_jobpost_id
                                );

                                if (mysqli_stmt_execute($stmt4)) {
                                    return "deleted";
                                }
                            }

                        }
                        // return $my_c_status;

                        // echo $my_c_status;
                        // echo $my_f_status;
                    }
                }

                return "updated";
            }
            return "failed";
        }
    }

    //add fb photos
    public function addFbPhotos()
    {
        $query = "INSERT INTO tbl_fbphoto (appointment_id, fb_photos)
        VALUES (?,?)";

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param(
            "is",
            $this->id,
            $this->photo
        );

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    //add feedback
    public function addFeedback()
    {

        $query = "INSERT INTO tbl_feedbacks (appointment_id, fb_from, fb_to, fb_comment, fb_star)
        VALUES (?,?,?,?,?)";

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param(
            "issss",
            $this->id,
            $this->fb_from,
            $this->fb_to,
            $this->fb_comment,
            $this->fb_star
        );

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
    
    public function c_markasdoneAppointment()
    {
        $query = "UPDATE $this->table_name SET c_status = ? WHERE id = ?";

        $stmt = mysqli_stmt_init($this->conn);

        if (!mysqli_stmt_prepare($stmt, $query)) {
            echo "SQL statement failed";
        } else {
            $status_occupied = "done";
            mysqli_stmt_bind_param(
                $stmt,
                "si",
                $status_occupied,
                $this->id
            );

            if (mysqli_stmt_execute($stmt)) {
                return "success";
            }
            return "failed";
        }
    }

    public function f_markasdoneAppointment()
    {
        $query = "UPDATE $this->table_name SET f_status = ? WHERE id = ?";

        $stmt = mysqli_stmt_init($this->conn);

        if (!mysqli_stmt_prepare($stmt, $query)) {
            echo "SQL statement failed";
        } else {
            $status_occupied = "done";
            mysqli_stmt_bind_param(
                $stmt,
                "si",
                $status_occupied,
                $this->id
            );

            if (mysqli_stmt_execute($stmt)) {
                return "success";
            }
            return "failed";
        }
    }
    
}
