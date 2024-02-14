<?php

namespace App\Entity;

use App\Repository\EmployeeInfoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmployeeInfoRepository::class)]
class EmployeeInfo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $employeeName = null;

    #[ORM\Column(length: 255)]
    private ?string $employeeID = null;

    #[ORM\Column(length: 255)]
    private ?string $departmentName = null;

    #[ORM\Column(length: 255)]
    private ?string $role = null;

    #[ORM\Column(length: 255)]
    private ?string $joiningDate = null;

    #[ORM\Column(length: 255)]
    private ?string $monthlySalary = null;

    #[ORM\Column(length: 255)]
    private ?string $projectsCompleted = null;

    #[ORM\Column(length: 255)]
    private ?string $teamLeadName = null;

    #[ORM\Column(length: 255)]
    private ?string $numLeavesPerMonth = null;

    #[ORM\Column(length: 255)]
    private ?string $numOfficialLeaves = null;

    #[ORM\Column(length: 255)]
    private ?string $allowedLeaves = null;

    #[ORM\Column(length: 255)]
    private ?string $unpaidLeaves = null;

    #[ORM\Column(length: 255)]
    private ?string $overtimeHours = null;

    #[ORM\Column(length: 255)]
    private ?string $homeAddress = null;

    #[ORM\Column(length: 255)]
    private ?string $idCardNumber = null;

    #[ORM\Column(length: 255)]
    private ?string $residentialCity = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmployeeName(): ?string
    {
        return $this->employeeName;
    }

    public function setEmployeeName(string $employeeName): static
    {
        $this->employeeName = $employeeName;

        return $this;
    }

    public function getEmployeeID(): ?string
    {
        return $this->employeeID;
    }

    public function setEmployeeID(string $employeeID): static
    {
        $this->employeeID = $employeeID;

        return $this;
    }

    public function getDepartmentName(): ?string
    {
        return $this->departmentName;
    }

    public function setDepartmentName(string $departmentName): static
    {
        $this->departmentName = $departmentName;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): static
    {
        $this->role = $role;

        return $this;
    }

    public function getJoiningDate(): ?string
    {
        return $this->joiningDate;
    }

    public function setJoiningDate(string $joiningDate): static
    {
        $this->joiningDate = $joiningDate;

        return $this;
    }

    public function getMonthlySalary(): ?string
    {
        return $this->monthlySalary;
    }

    public function setMonthlySalary(string $monthlySalary): static
    {
        $this->monthlySalary = $monthlySalary;

        return $this;
    }

    public function getProjectsCompleted(): ?string
    {
        return $this->projectsCompleted;
    }

    public function setProjectsCompleted(string $projectsCompleted): static
    {
        $this->projectsCompleted = $projectsCompleted;

        return $this;
    }

    public function getTeamLeadName(): ?string
    {
        return $this->teamLeadName;
    }

    public function setTeamLeadName(string $teamLeadName): static
    {
        $this->teamLeadName = $teamLeadName;

        return $this;
    }

    public function getNumLeavesPerMonth(): ?string
    {
        return $this->numLeavesPerMonth;
    }

    public function setNumLeavesPerMonth(string $numLeavesPerMonth): static
    {
        $this->numLeavesPerMonth = $numLeavesPerMonth;

        return $this;
    }

    public function getNumOfficialLeaves(): ?string
    {
        return $this->numOfficialLeaves;
    }

    public function setNumOfficialLeaves(string $numOfficialLeaves): static
    {
        $this->numOfficialLeaves = $numOfficialLeaves;

        return $this;
    }

    public function getAllowedLeaves(): ?string
    {
        return $this->allowedLeaves;
    }

    public function setAllowedLeaves(string $allowedLeaves): static
    {
        $this->allowedLeaves = $allowedLeaves;

        return $this;
    }

    public function getUnpaidLeaves(): ?string
    {
        return $this->unpaidLeaves;
    }

    public function setUnpaidLeaves(string $unpaidLeaves): static
    {
        $this->unpaidLeaves = $unpaidLeaves;

        return $this;
    }

    public function getOvertimeHours(): ?string
    {
        return $this->overtimeHours;
    }

    public function setOvertimeHours(string $overtimeHours): static
    {
        $this->overtimeHours = $overtimeHours;

        return $this;
    }

    public function getHomeAddress(): ?string
    {
        return $this->homeAddress;
    }

    public function setHomeAddress(string $homeAddress): static
    {
        $this->homeAddress = $homeAddress;

        return $this;
    }

    public function getIdCardNumber(): ?string
    {
        return $this->idCardNumber;
    }

    public function setIdCardNumber(string $idCardNumber): static
    {
        $this->idCardNumber = $idCardNumber;

        return $this;
    }

    public function getResidentialCity(): ?string
    {
        return $this->residentialCity;
    }

    public function setResidentialCity(string $residentialCity): static
    {
        $this->residentialCity = $residentialCity;

        return $this;
    }
}
