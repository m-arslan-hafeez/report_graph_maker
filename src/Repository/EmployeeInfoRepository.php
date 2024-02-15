<?php /** @noinspection PhpMultipleClassDeclarationsInspection */

namespace App\Repository;

use App\Entity\EmployeeInfo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EmployeeInfo>
 *
 * @method EmployeeInfo|null find($id, $lockMode = null, $lockVersion = null)
 * @method EmployeeInfo|null findOneBy(array $criteria, array $orderBy = null)
 * @method EmployeeInfo[]    findAll()
 * @method EmployeeInfo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmployeeInfoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EmployeeInfo::class);
    }

    /**
     * @return EmployeeInfo[] Returns an array of EmployeeInfo objects
     */
    public function findEmployeesByCityData(): array
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT e.residentialCity, COUNT(e.id) as employeeCount
            FROM App\Entity\EmployeeInfo e
            GROUP BY e.residentialCity'
        );
        return $query->getResult();
    }

    /**
     * @return EmployeeInfo[] Returns an array of EmployeeInfo objects
     */
    public function findEmployeesByMonthlySalaryData(): array
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT e.monthlySalary, COUNT(e.id) as employeeCount
            FROM App\Entity\EmployeeInfo e
            GROUP BY e.monthlySalary'
        );
        return $query->getResult();
    }

    /**
     * @return EmployeeInfo[] Returns an array of EmployeeInfo objects
     */
    public function findEmployeesByJoiningDateData(): array
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT e.joiningDate, COUNT(e.id) as employeeCount
            FROM App\Entity\EmployeeInfo e
            GROUP BY e.joiningDate'
        );
        return $query->getResult();
    }

    /**
     * @return EmployeeInfo[] Returns an array of EmployeeInfo objects
     */
    public function findEmployeesByDepartmentData(): array
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT e.departmentName, COUNT(e.id) as employeeCount
            FROM App\Entity\EmployeeInfo e
            GROUP BY e.departmentName'
        );
        return $query->getResult();
    }

    /**
     * @return EmployeeInfo[] Returns an array of EmployeeInfo objects
     */
    public function findEmployeesByRoleData(): array
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT e.role, COUNT(e.id) as employeeCount
            FROM App\Entity\EmployeeInfo e
            GROUP BY e.role'
        );
        return $query->getResult();
    }

    /**
     * @return EmployeeInfo[] Returns an array of EmployeeInfo objects
     */
    public function findEmployeesByTeamLeadData(): array
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT e.teamLeadName, COUNT(e.id) as employeeCount
            FROM App\Entity\EmployeeInfo e
            GROUP BY e.teamLeadName'
        );
        return $query->getResult();
    }

    /**
     * @return EmployeeInfo[] Returns an array of EmployeeInfo objects
     */
    public function findEmployeesByOvertimeData(): array
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT e.overtimeHours, COUNT(e.id) as employeeCount
            FROM App\Entity\EmployeeInfo e
            GROUP BY e.overtimeHours'
        );
        return $query->getResult();
    }


    /**
     * @return EmployeeInfo[] Returns an array of EmployeeInfo objects
     */
    public function findEmployeesByAllowedLeavesData(): array
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT e.allowedLeaves, COUNT(e.id) as employeeCount
            FROM App\Entity\EmployeeInfo e
            GROUP BY e.allowedLeaves'
        );
        return $query->getResult();
    }


}
